@extends('layouts.index')
@section('content')
<section class="posts">
    <div class="container">
        <ul class="posts__list post-list" style="
                padding: 25px 0 0 0;
                list-style: none;
                display: grid;
                grid-template-columns: 33.33333% 33.33333% 33.33333%;
                grid-template-rows: 505px 505px 505px 505px;
                grid-auto-flow: row;">
            @foreach($posts as $post)
                <li class="post-list__item" style=" padding: 15px; margin: 0;">
                    <article style="width: 100%; height: 100%; background: #ffffff; padding: 25px"
                             class="d-flex justify-content-between flex-column">
                        <div style="min-height: 40%; max-height: 30%; overflow: hidden; margin-bottom: 20px">
                            <a href="#" class="link-dark">
                                <img src="{{asset('storage/' . $post->img)}}" alt="..."
                                     style="height: 100%; object-fit: cover; width: 100%">
                            </a>
                        </div>
                        <div style="max-height: 35%; min-height: 35%; min-width: 100%;">
                            <h3>
                                <a href="#" class="link-dark">{{$post->title}}</a>
                            </h3>
                        </div>
                        <div style="max-height: 25%; min-height: 25%; min-width: 100%;">
                            <p>
                                <a href="#" class="link-secondary">{{Str::limit($post->description, 100)}}</a>
                            </p>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
