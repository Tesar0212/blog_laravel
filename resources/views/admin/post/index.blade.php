@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xl-12 mb-3">
            <h3>Категории</h3>
            <a href="{{route('admin.post.index')}}" class="btn btn-primary">All</a>
            @foreach($categories as $category)
                <a href="{{route('admin.post.index')}}?category_id={{$category->id}}" class="btn btn-primary">{{$category->title}}</a>
            @endforeach
        </div>
        @foreach($posts as $post)
            <div class="col-xl-3  mb-3">
                <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('storage/' . $post->img)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{Str::limit($post->title, 65)}}</h5>
                        <p class="card-text">{{Str::limit($post->description, 65)}}</p>
                        <a href="{{route('admin.post.show', $post->id)}}" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>

        @endforeach
        <div class="col-xl-12">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>

    <a href="{{route('admin.post.create')}}" class="btn btn-success btn-lg">Создать новый пост</a>
@endsection
