@extends('layouts.app')

@section('content')
    <h1 class="text-center">I'm Main</h1>
    <ul class="text-center">
        @foreach($movies as $key => $movie)
            <li>{{$key.' '}}{{$movie['title']}}</li>
        @endforeach

    </ul>
@endsection
