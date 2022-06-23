@extends('layouts.admin')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-xl-3  mb-3">
                <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset($post->img)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->content}}</p>
                        <a href="{{route('admin.post.show', $post->id)}}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
    <a href="{{route('admin.post.create')}}" class="btn btn-success btn-lg">Создать новый пост</a>
@endsection
