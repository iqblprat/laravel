@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    @foreach ($posts as $post)
        <article class="mb-4">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
