<?php

namespace App\Http\Controllers\Client;

use App\Core\Services\Infrastructure\IMailService;
use App\Dal\Entities\Banner;
use App\Dal\Entities\ImageFeed;
use App\Dal\Entities\Meta;
use App\Dal\Entities\Feed;
use App\Http\Controllers\Client\Base\ClientControllerBase;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Jorenvh\Share\Share;

class BlogController extends ClientControllerBase
{
    public function index(Request $request)
    {
        $posts = Blog::all();

        return $this->view("client.blog.index", [
            'posts' => $posts
        ]);
    }

    public function single(Request $request, $id)
    {
        $post = Blog::where('id', $id)->first();
        $posts = Blog::all()->take(3);
        $previous = Blog::where('id', '<', $post->id)->max('id');
        $next = Blog::where('id', '>', $post->id)->min('id');
        if ($previous == null) {
            $previous_id = Blog::latest('id')->first()->id;
        }
        else {
            $previous_id = $previous;
        }
        if ($next == null) {
            $next_id = Blog::first('id')->first()->id;
        }
        else {
            $next_id = $next;
        }

        return $this->view("client.blog.single", compact('post', 'posts', 'next_id', 'previous_id'));
    }
}
