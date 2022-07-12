@extends('layouts.admin')

@section('content')
    <div class="mb-3 d-flex justify-content-end">
        <a class="btn btn-primary" role="button" aria-disabled="true" href="{{route('admin.archive.index')}}"> < Вернуться ко всем постам</a>
    </div>
    <div class="mb-3 d-flex justify-content-center ">
        <h1>
            {{$archive->title}}
        </h1>
    </div>
    <div class="mb-3">
        <p>
            {{$archive->content}}
        </p>
    </div>
{{--    <div class="mb-3 d-flex justify-content-center">--}}
{{--        <img src="{{asset($post->img)}}" class="img-thumbnail" alt="">--}}
{{--    </div>--}}
    <div class="d-flex justify-content-start">
{{--        <a class="btn btn-success" role="button" aria-disabled="true" href="{{route('admin.archive.edit', $archive->id)}}">Редактировать пост</a>--}}
        <form action="{{route('admin.post.delete', $post->id)w}" method="post" >
            @csrf
            @method('delete')
            <input type="submit" value="Архивировать пост" class="btn btn-danger">
        </form>
    </div>
@endsection
