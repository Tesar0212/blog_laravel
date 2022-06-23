<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __invoke(Post $post)
    {
        $posts = Post::all();
        $archive = Post::withTrashed()->whereNotNull('deleted_at')->get();
        return view('admin.post.edit', compact('post','posts', 'archive'));
    }

}


