
@extends('layouts.main')
@section('main')
    
<h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($post as $item)
    <article class = "mb-5">
        <h1>
            <a href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
        </h1>
        {{ $item->excerpt }}
    </article>
    @endforeach

@endsection