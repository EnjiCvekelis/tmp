<?php

namespace App\Http\Controllers\Client;

use App\Core\Services\Infrastructure\IMailService;
use App\Dal\Entities\Banner;
use App\Dal\Entities\ImageFeed;
use App\Dal\Entities\Meta;
use App\Dal\Entities\Feed;
use App\Dal\Entities\News;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use App\Models\Blog;
use App\Models\Decor;
use App\Models\Design;
use App\Models\HomePage;
use App\Models\HomePageValues;
use App\Models\Interior;
use App\Models\Landscape;
use App\Models\Oversight;
use App\Models\Package;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends ClientControllerBase
{
    public function index(Request $request)
    {
        $data = HomePage::all()->first();
        $values = HomePageValues::all();
        $projects = Project::with('category')->get();
        $blogs = Blog::all()->take(3);
        return $this->view("client.home.index", [
            'data' => $data,
            'values' => $values,
            'interior' => Interior::all()->first(),
            'design' => Design::all()->first(),
            'decor' => Decor::all()->first(),
            'package' => Package::all()->first(),
            'oversight' => Oversight::all()->first(),
            'landscape' => Landscape::all()->first(),
            'projects' => $projects,
            'blogs' => $blogs
        ]);
    }
}
