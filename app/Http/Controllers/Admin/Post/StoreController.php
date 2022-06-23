<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'img' => 'string',

        ]);
        Post::create($data);
        return redirect()->route('admin.post.index');
    }

}


