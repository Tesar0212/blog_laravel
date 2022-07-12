<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends BaseController
{

    public function __invoke(Post $post)
    {

        $posts = Post::all();
        $archive = Post::onlyTrashed()->get();
        $categories = Category::all();
        return view('admin.post.edit', compact('post','posts', 'archive', 'categories'));
    }

}


