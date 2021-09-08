<?php

namespace App\Http\Controllers\Client;

use App\Core\Services\Infrastructure\IMailService;
use App\Dal\Entities\Banner;
use App\Dal\Entities\ImageFeed;
use App\Dal\Entities\Meta;
use App\Dal\Entities\Feed;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use App\Models\Decor;
use App\Models\Design;
use App\Models\Interior;
use App\Models\Landscape;
use App\Models\Oversight;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ServicesController extends ClientControllerBase
{
    public function index(Request $request)
    {
        return $this->view("client.services.index", [
        ]);
    }

    public function interior(Request $request)
    {
        $interior = Interior::all()->first();
        return $this->view("client.services.interior.index", [
            'data' => $interior
        ]);
    }

    public function design(Request $request)
    {
        $design = Design::all()->first();
        return $this->view("client.services.design.index", [
            'data' => $design
        ]);
    }

    public function oversight(Request $request)
    {
        $oversight = Oversight::all()->first();
        return $this->view("client.services.oversight.index", [
            'data' => $oversight
        ]);
    }

    public function landscape(Request $request)
    {
        $landscape = Landscape::all()->first();
        return $this->view("client.services.landscape.index", [
            'data' => $landscape
        ]);
    }

    public function decor(Request $request)
    {
        $decor = Decor::all()->first();
        return $this->view("client.services.decor.index", [
            'data' => $decor
        ]);
    }

    public function package(Request $request)
    {
        $package = Package::all()->first();
        return $this->view("client.services.package.index", [
            'data' => $package
        ]);
    }
}
