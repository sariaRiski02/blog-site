
@extends('layouts.main')

@section("main")

    <h1>{{ $post->title }}</h1>


    <p>By. Risky saria in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <br>
    <a href="/Blog">Back to post</a>

@endsection