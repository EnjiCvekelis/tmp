<?php

namespace App\Http\Controllers\Admin;

use App\Core\Services\Infrastructure\IImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Services\DecorPageRequest;
use App\Http\Requests\Admin\Services\DecorPageUpdateRequest;
use App\Http\Requests\Admin\Services\DesignPageRequest;
use App\Http\Requests\Admin\Services\DesignPageUpdateRequest;
use App\Http\Requests\Admin\Services\InteriorPageRequest;
use App\Http\Requests\Admin\Services\InteriorPageUpdateRequest;
use App\Http\Requests\Admin\Services\LandscapePageRequest;
use App\Http\Requests\Admin\Services\LandscapePageUpdateRequest;
use App\Http\Requests\Admin\Services\OversightPageRequest;
use App\Http\Requests\Admin\Services\OversightPageUpdateRequest;
use App\Http\Requests\Admin\Services\PackagePageRequest;
use App\Http\Requests\Admin\Services\PackagePageUpdateRequest;
use App\Models\Decor;
use App\Models\Design;
use App\Models\Interior;
use App\Models\Landscape;
use App\Models\Oversight;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServicesAdminController extends Controller
{
    public function __construct(IImageService $imageService)
    {
        $this->_imageService = $imageService;
    }
    public function index()
    {
        return view('admin.services.index', [

        ]);
    }

    public function interior()
    {
        $data = Interior::all()->first();
        return view('admin.services.interior', [
            'data' => $data
        ]);
    }

    public function createInterior(InteriorPageRequest $request)
    {
        $validated = $request->validated();
        $data = Interior::create($validated);
        $data->first_image = $this->_imageService->upload($request->first_image, 'interior');
        $data->third_image = $this->_imageService->upload($request->third_image, 'interior');
        $data->fourth_image = $this->_imageService->upload($request->fourth_image, 'interior');
        $data->save();

        return response()->redirectToRoute('admin.services.interior', ['success' => true]);

    }

    public function updateInterior(InteriorPageUpdateRequest $request)
    {
        $validated = $request->validated();


        $data = Interior::findOrFail($request->id);
        if ($request->first_image) {
            $this->_imageService->delete($data->first_image);
        }
        if ($request->third_image) {
            $this->_imageService->delete($data->third_image);
        }
        if ($request->fourth_image) {
            $this->_imageService->delete($data->fourth_image);
        }
        $data->fill($validated);
        if ($request->first_image) {
            $newImage = $this->_imageService->upload($request->first_image, 'interior');
            $data->first_image = $newImage;
        }
        if ($request->third_image) {
            $newImage = $this->_imageService->upload($request->third_image, 'interior');
            $data->third_image = $newImage;
        }
        if ($request->fourth_image) {
            $newImage = $this->_imageService->upload($request->fourth_image, 'interior');
            $data->fourth_image = $newImage;
        }

        $data->save();

        return response()->redirectToRoute('admin.services.interior', ['success' => true]);

    }

    public function design()
    {
        $data = Design::all()->first();
        return view('admin.services.design', [
            'data' => $data
        ]);
    }

    public function createDesign(DesignPageRequest $request)
    {
        $validated = $request->validated();

        $data = Design::create($validated);
        $data->first_image = $this->_imageService->upload($request->first_image, 'design');
        $data->save();

        return response()->redirectToRoute('admin.services.design', ['success' => true]);
    }

    public function updateDesign(DesignPageUpdateRequest $request)
    {
        $validated = $request->validated();

        $data = Design::findOrFail($request->id);
        if ($request->first_image) {
            $this->_imageService->delete($data->first_image);
        }
        $data->fill($validated);
        if ($request->first_image) {
            $newImage = $this->_imageService->upload($request->first_image, 'design');
            $data->first_image = $newImage;
        }
        $data->save();

        return response()->redirectToRoute('admin.services.design', ['success' => true]);

    }

    public function oversight()
    {
        $data = Oversight::all()->first();
        return view('admin.services.oversight', [
            'data' => $data
        ]);
    }

    public function createOversight(OversightPageRequest $request)
    {
        $validated = $request->validated();

        $data = Oversight::create($validated);
        $data->first_image = $this->_imageService->upload($request->first_image, 'oversight');
        $data->save();

        return response()->redirectToRoute('admin.services.oversight', ['success' => true]);
    }

    public function updateOversight(OversightPageUpdateRequest $request)
    {
        $validated = $request->validated();

        $data = Oversight::findOrFail($request->id);
        if ($request->first_image) {
            $this->_imageService->delete($data->first_image);
        }
        $data->fill($validated);
        if ($request->first_image) {
            $newImage = $this->_imageService->upload($request->first_image, 'oversight');
            $data->first_image = $newImage;
        }
        $data->save();

        return response()->redirectToRoute('admin.services.oversight', ['success' => true]);
    }

    public function landscape()
    {
        $data = Landscape::all()->first();
        return view('admin.services.landscape', [
            'data' => $data
        ]);
    }
    public function createLandscape(LandscapePageRequest $request)
    {
        $validated = $request->validated();
        $data = Landscape::create($validated);
        $data->first_image = $this->_imageService->upload($request->first_image, 'landscape');
        $data->save();

        return response()->redirectToRoute('admin.services.landscape', ['success' => true]);
    }
    public function updateLandscape(LandscapePageUpdateRequest $request)
    {
        $validated = $request->validated();

        $data = Landscape::findOrFail($request->id);
        if ($request->first_image) {
            $this->_imageService->delete($data->first_image);
        }
        $data->fill($validated);
        if ($request->first_image) {
            $newImage = $this->_imageService->upload($request->first_image, 'landscape');
            $data->first_image = $newImage;
        }
        $data->save();

        return response()->redirectToRoute('admin.services.landscape', ['success' => true]);
    }

    public function decor()
    {
        $data = Decor::all()->first();
        return view('admin.services.decor', [
            'data' => $data
        ]);
    }

    public function createDecor(DecorPageRequest $request)
    {
        $validated = $request->validated();

        $data = Decor::create($validated);
        $data->first_image = $this->_imageService->upload($request->first_image, 'decor');
        $data->second_image = $this->_imageService->upload($request->second_image, 'decor');
        $data->save();

        return response()->redirectToRoute('admin.services.decor', ['success' => true]);
    }

    public function updateDecor(DecorPageUpdateRequest $request)
    {
        $validated = $request->validated();

        $data = Decor::findOrFail($request->id);
        if ($request->first_image) {
            $this->_imageService->delete($data->first_image);
        }
        if ($request->second_image) {
            $this->_imageService->delete($data->second_image);
        }
        $data->fill($validated);
        if ($request->first_image) {
            $newImage = $this->_imageService->upload($request->first_image, 'decor');
            $data->first_image = $newImage;
        }
        if ($request->second_image) {
            $newImage = $this->_imageService->upload($request->second_image, 'decor');
            $data->second_image = $newImage;
        }
        $data->save();

        return response()->redirectToRoute('admin.services.decor', ['success' => true]);
    }

    public function package()
    {
        $data = Package::all()->first();
        return view('admin.services.package', [
            'data' => $data
        ]);
    }

    public function createPackage(PackagePageRequest $request)
    {
        $validated = $request->validated();

        $data = Package::create($validated);
        $data->first_image = $this->_imageService->upload($request->first_image, 'package');
        $data->second_image = $this->_imageService->upload($request->second_image, 'package');
        $data->save();

        return response()->redirectToRoute('admin.services.package', ['success' => true]);
    }

    public function updatePackage(PackagePageUpdateRequest $request)
    {
        $validated = $request->validated();

        $data = Package::findOrFail($request->id);
        if ($request->first_image) {
            $this->_imageService->delete($data->first_image);
        }
        if ($request->second_image) {
            $this->_imageService->delete($data->second_image);
        }
        $data->fill($validated);
        if ($request->first_image) {
            $newImage = $this->_imageService->upload($request->first_image, 'package');
            $data->first_image = $newImage;
        }
        if ($request->second_image) {
            $newImage = $this->_imageService->upload($request->second_image, 'package');
            $data->second_image = $newImage;
        }
        $data->save();

        return response()->redirectToRoute('admin.services.package', ['success' => true]);
    }
}
