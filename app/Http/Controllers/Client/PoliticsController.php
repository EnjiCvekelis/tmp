<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use Illuminate\Http\Request;

class PoliticsController extends ClientControllerBase
{
    public function index(Request $request)
    {
        return $this->view("client.politics.index");
    }
}
