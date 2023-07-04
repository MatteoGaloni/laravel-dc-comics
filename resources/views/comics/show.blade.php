@extends('layouts.app')

@section('content')
    <div id="comics_container" class="container my-4">
        <div class="row">
            <div class="col-8">
                <h3>{{ $comic->title }}</h3>
                <div class="d-flex justify-content-between bg-success">
                    <div class="d-flex justify-content-between">
                        <span>U.S. Price: {{ $comic->price }}</span>
                        <span>Available</span>
                    </div>
                    <div>Check availability</div>

                </div>
                <p>{{ $comic->description }}</p>
            </div>
            <div class="col-4">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4>Specs</h4>
                <div class="d-flex justify-content-between">
                    <span>Series:</span>
                    <span>{{ $comic->series }}</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>US Price:</span>
                    <span>{{ $comic->price }}</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>On Sale Date:</span>
                    <span>{{ $comic->sale_date }}</span>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
