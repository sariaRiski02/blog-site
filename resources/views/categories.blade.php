
@extends('layouts.main')
@section('main')
    
<h1 class="mb-5">Post Categories: </h1>
    @foreach ($categories as $item)
    <article class = "mb-5">

        <ul>
            <li>
                <h2><a href="/posts/{{ $item->slug }}">{{ $item->name }}</a></h2>
            </li>
        </ul>

    </article>
    @endforeach

@endsection