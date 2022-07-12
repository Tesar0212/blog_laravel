<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CreateController extends BaseController
{

    public function __invoke()
    {
        $posts = Post::all();
        $archive = Post::onlyTrashed()->get();
        $categories = Category::all();
        return view('admin.post.create', compact('posts', 'archive', 'categories'));
    }

}


