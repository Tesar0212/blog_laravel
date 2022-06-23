@extends('layouts.admin')

@section('content')

    <form action="{{route('admin.post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}"  placeholder="Заголовок">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Контент</label>
            <textarea class="form-control" rows="20" name="content" id="content" placeholder="Текст">{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Путь к картинке</label>
            <input type="text" class="form-control" name="img" id="img" value="{{$post->img}}" placeholder="Url картинки">
        </div>
        <button type="submit" class="btn btn-primary">Изменить пост</button>
    </form>
@endsection
