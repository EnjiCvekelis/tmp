<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use Illuminate\Http\Request;

class PricesController extends ClientControllerBase
{
    public function index(Request $request)
    {
        return $this->view("client.prices.index", [
        ]);
    }
}
