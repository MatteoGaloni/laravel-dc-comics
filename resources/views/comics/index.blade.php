@extends('layouts.app')

@section('content')
    <div id="slider_wrapper">
        <button id="current_btn" class="btn btn-primary border-primary text-white">CURRENT SERIES</button>
        <div class="container p-2 d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="my_slide p-2">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic['thumb'] }}" alt="$thumb['series']">
                        <h6 class="slide_series p-2">{{ $comic['series'] }}</h6>
                    </a>
                </div>
            @endforeach
            <button id="load_btn" class="btn btn-primary border-primary text-white">LOAD MORE</button>
        </div>
    </div>
@endsection
