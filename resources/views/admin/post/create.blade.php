@extends('layouts.admin')

@section('content')

    <form action="{{route('admin.post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" name="title" id="title"  placeholder="Заголовок">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Контент</label>
            <textarea class="form-control" rows="20" name="content" id="content" placeholder="Текст"></textarea>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Путь к картинке</label>
            <input type="text" class="form-control" name="img" id="img"  placeholder="Url картинки">
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Создать пост</button>
            <a class="btn btn-danger" role="button" aria-disabled="true" href="{{route('admin.post.index')}}">Вернуться к списку постов</a>
        </div>
    </form>
@endsection
