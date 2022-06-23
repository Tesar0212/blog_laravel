<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke()
    {
        $posts = Post::all();
        $archive = Post::withTrashed()->whereNotNull('deleted_at')->get();
        return view('admin.post.index', compact('posts', 'archive'));
        dd($posts);
    }

}

