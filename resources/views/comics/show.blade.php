@extends('layouts.app')

@section('content')
    <div id="comics_container" class="container my-4">
        <a href="{{ route('comics.edit', $comic->id) }}">
            <button id="load_btn" class="btn btn-primary border-primary text-white">Edit Comic Book</button>
        </a>
        <form id="form" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
        <button onclick="confirmDelete()" id="alert_btn" class="btn btn-warning border-primary text-white">Delete Comic
            Book</button>
        <div class="row">
            <div class="col-8">
                <h3>{{ $comic->title }}</h3>
                <div class="card d-flex justify-content-between bg-success">
                    <div class="card-body d-flex justify-content-between">
                        <span>U.S. Price: {{ $comic->price }}</span>
                        <span>Available</span>
                    </div>
                </div>
                <p> {{ $comic->description }}</p>
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
            <div class="col_6 card">
                @foreach ($comic->artists as $artist)
                    <div>{{ $artist->name }}</div>
                @endforeach
                {{-- <div>{{ $comic->writers }}</div> --}}

            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            let r = confirm("Sei sicuro di cancellare?");
            if (r) {
                document.getElementById("form").submit();
            }
        }
    </script>
@endsection
