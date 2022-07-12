@extends('layouts.admin')

@section('content')
    <div class="mb-3 d-flex justify-content-end">
        <a class="btn btn-primary" role="button" aria-disabled="true" href="{{route('admin.post.index')}}"> < Вернуться ко всем постам</a>
    </div>
    <div class="mb-3 d-flex justify-content-center ">
        <h1>
            {{$post->title}}
        </h1>
    </div>
    <div class="mb-3 d-flex justify-content-center text-center">
        <h3>
            {{$post->description}}
        </h3>
    </div>
    <div class="mb-3 w-100">
        <p>
            {{$post->content}}
        </p>
    </div>
{{--    <div class="mb-3 d-flex justify-content-center">--}}
{{--        <img src="{{asset($post->img)}}" class="img-thumbnail" alt="">--}}
{{--    </div>--}}
    <div class="d-flex justify-content-start">
        <a class="btn btn-success" role="button" aria-disabled="true" href="{{route('admin.post.edit', $post->id)}}">Редактировать пост</a>
        <form action="{{route('admin.post.delete', $post->id)}}" method="post" >
            @csrf
            @method('delete')
            <input type="submit" value="Архивировать пост" class="btn btn-danger">
        </form>
    </div>
@endsection
