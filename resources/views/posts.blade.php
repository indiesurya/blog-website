@extends('layout.main')

@section('container')    
    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/posts/{{ $post->slug }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection