<?php

namespace App\Http\Controllers\Client;

use App\Core\Services\Infrastructure\IMailService;
use App\Dal\Entities\Banner;
use App\Dal\Entities\ImageFeed;
use App\Dal\Entities\Meta;
use App\Dal\Entities\Feed;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PortfolioController extends ClientControllerBase
{
    public function index(Request $request)
    {
        $projects = Project::all();
        $project_categories = ProjectCategory::all();

        return $this->view("client.portfolio.index", [
            'project_categories' => $project_categories,
            'projects' => $projects
        ]);
    }

    public function single(Request $request, $category, $id)
    {
        $project = Project::where('id', $id)->with(['category', 'images'])->first();
        $previousId = Project::where('id', '<', $project->id)->max('id');
        $nextId = Project::where('id', '>', $project->id)->min('id');
        $next = Project::where('id', $nextId)->with(['category'])->first();
        $previous = Project::where('id', $previousId)->with(['category'])->first();
        return $this->view("client.portfolio.single", [
            'project' => $project,
            'next' => $next,
            'previous' => $previous
        ]);
    }

    public function category(Request $request, $category)
    {
        $project_categories = ProjectCategory::all();
        $projects = Project::with('category')->whereHas('category', function ($query) use ($category) {
            $query->where('search_key', 'like', '%'.$category.'%'  );
        })->get();
        $active = ProjectCategory::where('search_key', $category)->first();

        return $this->view("client.portfolio.category", [
            'items' => $projects,
            'project_categories' => $project_categories,
            'active' => $active
        ]);
    }
}
