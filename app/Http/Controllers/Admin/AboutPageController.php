<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\AboutPageRequest;
use App\Models\About;
use Inertia\Inertia;

class AboutPageController extends Controller
{
    public function index()
    {
        $data = About::all()->first();
        return view('admin.aboutpage.index',[
            'data' => $data
        ]);
    }

    public function update(AboutPageRequest $request)
    {
        $validated = $request->validated();

        if(!isset($request->id)) {
            $data = About::create($validated);
            return response()->redirectToRoute('admin.aboutpage.index', ['success' => true]);
        } else {
            $data = About::findOrFail($request->id);
            $data->fill($validated);
            $data->save();

            return response()->redirectToRoute('admin.aboutpage.index', ['success' => true]);
        }
    }
}
