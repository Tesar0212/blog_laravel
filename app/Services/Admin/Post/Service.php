<?php


namespace App\Services\Admin\Post;


use App\Models\Post;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data){

        $data['img'] = Storage::disk('public')->put('', $data['img']);
        Post::firstOrCreate($data);

    }

    public function update($post, $data){


        $data['img'] = Storage::disk('public')->put('', $data['img']);
        $post->update($data);

    }

}
