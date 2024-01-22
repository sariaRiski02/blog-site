
    @extends('layouts.main')
    @section('main')
    <h1>About Me!</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/<?= $image ?>" alt="{{ $name }}" width="200px">
    @endsection

    