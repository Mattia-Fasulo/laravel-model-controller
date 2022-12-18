@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $key => $movie)
                <div class="col-md-4">
                    <div class="profile-card-6">
                        <img src="{{ $movie['image'] }}">
                        <div class="profile-name">
                            {{ $movie['original_title'] }}
                        </div>
                        <div class="profile-position">
                        </div>
                        <div class="profile-overview">
                            <div class="profile-overview">
                                <div class="row text-center">
                                    <div class="col-xs-4">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < ceil($movie['vote']) / 2)
                                                <img src="{{ Vite::asset('resources/img/star-solid.svg') }}"
                                                    alt="star">
                                            @else
                                                <img src="{{ Vite::asset('resources/img/star-regular.svg') }}"
                                                    alt="star">
                                            @endif
                                        @endfor
                                    </div>
                                    {{--
                                    <div class="col-xs-4">
                                        <h3>50</h3>
                                        <p>Matches</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <h3>35</h3>
                                        <p>Goals</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
