@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <h6>By. <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </h6>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/blog">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
