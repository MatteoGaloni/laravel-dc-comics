@extends('layouts.app')

@section('content')
    <div id="comics_container" class="container">
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
                <p>advertisment</p>
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-6">
                <h4>Talent</h4>
                <hr>
                <div class="d-flex justify-content-between">
                    <div>art By</div>
                    <ul class="list-unstyled direction-end">
                        @foreach ($info[0]['artists'] as $artist)
                            <li>{{ $artist }}</li>
                        @endforeach
                    </ul>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div>Written By</div>
                    <ul class="list-unstyled direction-end">
                        @foreach ($info[0]['writers'] as $writer)
                            <li>{{ $writer }}</li>
                        @endforeach
                    </ul>
                </div>
                <hr>
            </div>
            <div class="col-6">
                <h4>Specs</h4>
                <div class="d-flex justify-content-between">
                    <span>Series:</span>
                    <span>{{ $info[0]['series'] }}</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>US Price:</span>
                    <span>{{ $info[0]['price'] }}</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span>On Sale Date:</span>
                    <span>{{ $info[0]['sale_date'] }}</span>
                </div>
                <hr>
            </div>
        </div> --}}
    </div>
@endsection
