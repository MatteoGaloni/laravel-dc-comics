@extends('layouts.app')

@section('content')
    <div id="slider_wrapper">
        <div class="container p-2 d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="my_slide p-2">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic['thumb'] }}" alt="$thumb['series']">
                        <h6 class="slide_series p-2">{{ $comic['series'] }}</h6>
                    </a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary border-primary text-white" type="submit">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="container">
            <a href="{{ route('comics.create') }}">
                <button id="load_btn" class="btn btn-primary border-primary text-white">ADD NEW COMICS</button>
            </a>
        </div>
    </div>
@endsection
