@extends('layouts.app')

@section('content')
    <div id="comics_container" class="container my-4">
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf

                    @method('PUT')

                    <label for="name">Title</label>
                    <input class="form-control" type="text" name="title" value='{{ $comic->title }}'>

                    <label for="name">Description</label>
                    <textarea rows="10" class="form-control" name="description" value='{{ $comic->description }}'>{{ $comic->description }}</textarea>

                    <label for="name">Thumb</label>
                    <input class="form-control" type="text" name="thumb" value='{{ $comic->thumb }}'>

                    <label for="name">Price</label>
                    <input class="form-control" type="text" name="price" value='{{ $comic->price }}'>

                    <label for="name">Series</label>
                    <input class="form-control" type="text" name="series" value='{{ $comic->series }}'>

                    <label for="name">Sale_date</label>
                    <input class="form-control" type="text" name="sale_date" value='{{ $comic->sale_date }}'>

                    <label for="name">Type</label>
                    <select class="form-select" type="text" name="type">
                        <option value="graphic novel" @selected($comic->type == 'graphic novel')>Graphic Novel</option>
                        <option value="comic book" @selected($comic->type == 'comic book')>Comic Book</option>
                        <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
                </form>

            </div>
        </div>



    </div>
@endsection
