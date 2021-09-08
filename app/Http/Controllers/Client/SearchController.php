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

class SearchController extends ClientControllerBase
{
    public function index(Request $request)
    {

//        dd($request->all());
        return $this->view("client.search.index", [
        ]);
    }

    public function search(Request $request)
    {
        $searchWord = $request->search;
        $projects = Project::where('headline', 'LIKE', "%{$searchWord}%")->orWhere('description', 'LIKE', "%{$searchWord}%")->orWhere('content', 'LIKE', "%{$searchWord}%")->with('category')->get();
        $posts = Blog::where('headline', 'LIKE', "%{$searchWord}%")->orWhere('description', 'LIKE', "%{$searchWord}%")->orWhere('content', 'LIKE', "%{$searchWord}%")->get();
        return $this->view("client.search.index", [
            'projects' => $projects,
            'posts' => $posts
        ]);
    }
}
