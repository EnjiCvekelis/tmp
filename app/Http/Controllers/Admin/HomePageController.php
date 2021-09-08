<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\HomePageRequest;
use App\Models\HomePage;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomePageController extends Controller
{
    public function index()
    {
        $data = HomePage::all()->first();
        return view('admin.homepage.index',[
            'data' => $data
        ]);
    }

    public function update(HomePageRequest $request)
    {
        $validated = $request->validated();

        if(!isset($request->id)) {
            $data = HomePage::create($validated);
            return response()->redirectToRoute('admin.homepage.index', ['success' => true]);
        } else {
            $data = HomePage::findOrFail($request->id);
            $data->fill($validated);
            $data->save();

            return response()->redirectToRoute('admin.homepage.index', ['success' => true]);
        }
    }
}
