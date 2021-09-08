<?php

namespace App\Http\Controllers\Client;

use App\Core\Services\Infrastructure\IMailService;
use App\Dal\Entities\Banner;
use App\Dal\Entities\ImageFeed;
use App\Dal\Entities\Materials;
use App\Dal\Entities\Meta;
use App\Dal\Entities\Feed;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class MaterialsController extends ClientControllerBase
{
    public function index(Request $request)
    {

        $materials = Materials::orderBy('created_at', 'desc')->get();
        return $this->view("client.materials.index", [
            'materials' => $materials
        ]);
    }

    public function single(Request $request, $seoUrl)
    {

        $material = Materials::where('seo_url', '=', $seoUrl)->first();
        return $this->view("client.materials.single", [
            'item' => $material
        ]);
    }
}
