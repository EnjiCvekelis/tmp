<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ProjectCategoryBaseRequest;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProjectCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('project_categories')->paginate(10);
        return view('admin.portfolio.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCategoryBaseRequest $request)
    {
        $validated = $request->validated();
        $category = new ProjectCategory($validated);
        $category->search_key = strtolower(convertRus($request->name));
        $category->save();

        return response()->redirectToRoute('admin.portfolio.edit', ['portfolio' => $category->id, 'success' => true]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = DB::table('projects')->where('project_category_id', $id)->paginate(10);
        return view('admin.portfolio.edit_category',[
            'category' => ProjectCategory::where('id', $id)->first(),
            'projects' => $projects
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectCategoryBaseRequest $request, $category)
    {
        $category = ProjectCategory::find($category);
        $validated = $request->validated();
        $category->fill($validated);
        $category->search_key = strtolower(convertRus($request->name));
        $category->save();

        return response()->redirectToRoute('admin.portfolio.edit', ['portfolio' => $category->id, 'success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        ProjectCategory::find($id)->delete();
        return back();
    }
}
