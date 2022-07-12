<?php

namespace App\Http\Controllers\Admin\Archive;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class RestoreController extends Controller
{

    public function __invoke($id)
    {
        Post::withTrashed()->find($id)->restore();
        return redirect()->route('admin.archive.index');
    }

}


