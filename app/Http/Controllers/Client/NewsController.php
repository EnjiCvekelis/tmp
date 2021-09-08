<?php

namespace App\Http\Controllers\Client;

use App\Core\Services\Infrastructure\IMailService;
use App\Dal\Entities\News;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class NewsController extends ClientControllerBase
{


    public function single(Request $request, $seoUrl)
    {

        $news = News::where('seo_url', '=', $seoUrl)->first();
        return $this->view("client.news.single", [
            'item' => $news
        ]);
    }
}
