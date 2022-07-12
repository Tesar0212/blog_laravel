@extends('layouts.admin')

@section('content')

    <form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input value="{{old('title')}}" type="text" class="form-control" name="title" id="title"
                   placeholder="Заголовок">
            @error('title')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Короткое описание статьи</label>
            <textarea class="form-control" rows="5" name="description" id="description"
                      placeholder="Текст">{{old('description')}}</textarea>
            @error('description')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Текст статьи</label>
            <textarea id="summernote" name="content" class="form-control" rows="20">{{old('content')}}</textarea>
            @error('content')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Путь к картинке</label>
            <div class="input-group">
                <div class="custom-file">
                    <input value="{{old('img')}}" name="img" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                </div>
            </div>
{{--            <input value="{{old('img')}}" type="text" class="form-control" name="img" id="img"--}}
{{--                   placeholder="Url картинки">--}}
            @error('img')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <br>
            <select class="form-select" id="category" aria-label="Default select example"
                    style="padding: 10px; text-transform: capitalize" name="category_id">
                <option disabled selected>Выберите категорию</option>
                @foreach($categories as $category)
                    {{old('category_id') === $category->id ? 'selected' : ''}}
                    <option style="text-transform: capitalize" value="{{$category->id}}">{{ $category->title }}</option>
                @endforeach
            </select>
            @error('category')
            <p class="text-danger">Это поле необходимо заполнить</p>
            @enderror
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Создать пост</button>
            <a class="btn btn-danger" role="button" aria-disabled="true" href="{{route('admin.post.index')}}">Вернуться
                к списку постов</a>
        </div>
    </form>
@endsection
