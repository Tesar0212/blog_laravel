@extends('layouts.admin')

@section('content')

    <form action="{{route('admin.post.update', $post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input value="{{$post->title}}" type="text" class="form-control" name="title" id="title"
                   placeholder="Заголовок">
            @error('title')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Короткое описание статьи</label>
            <textarea class="form-control" rows="5" name="description" id="description"
                      placeholder="Текст">{{$post->description}}</textarea>
            @error('description')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Текст статьи</label>
            <textarea id="summernote" name="content" class="form-control" rows="20">{{$post->content}}</textarea>
            @error('content')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Картинка</label>
            <br>
            <img src="{{asset("storage/" . $post->img)}}" alt="">
        </div>
        <div class="mb-3">


            <label for="title" class="form-label">Изменить картинку</label>
            <div class="input-group">
                <div class="custom-file">
                    <input value="{{$post->img}}" name="img" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                    @error('img')
                    <p class="text-danger">Это поле необходимо заполнить</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <br>
            <select class="form-select" id="category" aria-label="Default select example"
                    style="padding: 10px; text-transform: capitalize" name="category_id">
                <option disabled selected>Выберите категорию</option>
                @foreach($categories as $category)
                    <option {{ $category->id === $post->category->id ? 'selected' : '' }} style="text-transform: capitalize" value="{{$category->id}}">{{ $category->title }}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit"  class="btn btn-success">Редактировать пост</button>
            <a class="btn btn-danger" role="button" aria-disabled="true" href="{{route('admin.post.index')}}">Вернуться
                к списку постов</a>
        </div>
    </form>
@endsection
