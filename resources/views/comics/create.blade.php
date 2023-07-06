@extends('layouts.app')

@section('content')
    <div id="comics_container" class="container my-4">
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf

                    <label for="name">Title</label>
                    <input class="form-control" type="text" value="{{ old('title') }}" name="title">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="name">Description</label>
                    <textarea rows="10" class="form-control" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="name">Thumb</label>
                    <input class="form-control" type="text" value="{{ old('thumb') }}" name="thumb">
                    @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="name">Price</label>
                    <input class="form-control" type="text" value="{{ old('price') }}" name="price">
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="name">Series</label>
                    <input class="form-control" type="text" value="{{ old('series') }}" name="series">
                    @error('series')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="name">Sale_date</label>
                    <input class="form-control" type="text" value="{{ old('sale_date') }}" name="sale_date">
                    @error('sale_date')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <label for="name">Type</label>
                    <select class="form-select" type="text" name="type">
                        <option value="graphic novel" selected>Graphic Novel</option>
                        <option value="comic book">Comic Book</option>
                        <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
                    </select>
                    @error('type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </form>

            </div>
        </div>



    </div>
@endsection
