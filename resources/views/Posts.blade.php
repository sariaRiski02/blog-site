
@extends('layouts.main')
@section('main')
    

    @foreach ($posts as $item)
    <article class = "mb-5">
        <h1>
            <a href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
        </h1>
        {{ $item->excerpt }}
    </article>
    @endforeach

@endsection