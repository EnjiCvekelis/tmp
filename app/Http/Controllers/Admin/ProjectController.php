<?php

namespace App\Http\Controllers\Admin;

use App\Core\Services\Infrastructure\IImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\AddProjectRequest;
use App\Http\Requests\Admin\Project\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __construct(IImageService $imageService)
    {
        $this->_imageService = $imageService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($portfolio)
    {

        return view('admin.portfolio.create_project',
            [
                'portfolio_id' => $portfolio,
                'photos' => []
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProjectRequest $request, $portfolio)
    {


        $validated = $request->validated();
        $project = new Project($validated);
        $project->first_image = $this->_imageService->upload($request->cover, 'projects');
        $project->save();
        $json = json_decode(stripcslashes($request->galleryData), true);

        if (!empty($json)) {
            foreach ($json["added"] as $added) {
                $file = $added["image"];
                $img = new ProjectImages();
                $img->project_id = $project->id;
                $img->image = $this->_imageService->uploadBase64($file, 'project_images' )[0];
                $img->sort_order = (int)$added["sortOrder"];
                $img->save();
            }
        }

        return response()->redirectToRoute('admin.project.edit', ['portfolio' => $portfolio, 'project' => $project->id, 'success' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($portfolio,$project)
    {
        $photos = [];
        $gallery = ProjectImages::where('project_id', '=', $project)->get();
        foreach ($gallery as $item) {
            $photos[] = [
                'id' => $item->id,
                'image' => assetImage($item->image),
                'sortOrder' => $item->sort_order,
            ];

        }

        return view('admin.portfolio.edit_project', [
            'project'=>Project::find($project),
            'portfolio_id'=> $portfolio,
            'photos' => $photos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request,$portfolio, $id)
    {
        $validated = $request->validated();
        $project = Project::find($id);
        if ($request->cover) {
            $this->_imageService->delete($project->cover);
        }
        $project->fill($validated);
        if ($request->cover) {
            $newImage = $this->_imageService->upload($request->cover, 'projects');
            $project->cover = $newImage;
        }
        $project->save();

        $json = json_decode(stripcslashes($request->galleryData), true);

        if (!empty($json)) {
            if (!empty($json["added"])) {
                foreach ($json["added"] as $added) {
                    $file = $added["image"];
                    $img = new ProjectImages();

                    $img->project_id = $project->id;
                    $img->image = $this->_imageService->uploadBase64($file, 'project_images' )[0];
                    $img->sort_order = (int)$added["sortOrder"];
                    $img->save();
                }
            }
            if (!empty($json["old"])) {
                foreach ($json["old"] as $old) {
                    $img = ProjectImages::findOrFail((int)$old["id"]);
                    $img->sort_order = (int)$old["sortOrder"];
                    $img->save();
                }
            }


            if (!empty($json["removed"])) {
                foreach ($json["removed"] as $removed) {
                    $img = ProjectImages::findOrFail((int)$removed);
                    $this->_imageService->delete($img->image);
                    $img->delete();
                }
            }
        }


        return response()->redirectToRoute('admin.project.edit', ['portfolio' => $portfolio, 'project' => $project->id, 'success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project)
    {
        Project::find($project)->delete();
        return back();
    }

    public function uploadImage(Request $request) {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images/projects'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/projects/'.$fileName);
            $msg = 'Изображение успешно загружено';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
