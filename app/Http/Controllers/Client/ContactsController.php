<?php

namespace App\Http\Controllers\Client;

use App\Core\Services\Infrastructure\IMailService;
use App\Dal\Entities\Banner;
use App\Dal\Entities\ImageFeed;
use App\Dal\Entities\Meta;
use App\Dal\Entities\Feed;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ContactsController extends ClientControllerBase
{
    public function index(Request $request)
    {
        return $this->view("client.contacts.index", [
        ]);
    }
}
