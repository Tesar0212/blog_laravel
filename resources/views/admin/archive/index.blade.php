@extends('layouts.admin')

@section('content')
    <div class="row">
        @foreach($archive as $post)
            <div class="col-xl-3  mb-3">
                <div class="card w-100" style="width: 18rem;">
                    <img src="{{asset('storage/' . $post->img)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{Str::limit($post->title, 65)}}</h5>
                        <p class="card-text">{{Str::limit($post->description, 65)}}</p>
                        <a href="{{route('admin.archive.restore', $post->id)}}" class="btn btn-danger">Восстановить пост</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
