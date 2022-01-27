@extends('layouts.main')

@section('content')
    <section class="container">
        <h2>Create new comic</h2>
        <div class="row">
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-2">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}">
                </div>
                <div class="mb-2">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control" value="{{$comic->image}}">
                </div>
                <div class="mb-2">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{$comic->description}}">
                </div>
                <div class="mb-2">
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" class="form-control" value="{{$comic->series}}">
                </div>
                <div class="mb-2">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control"
                    value="{{$comic->price}}">
                </div>
                <div class="mb-2">
                    <label for="sale_date">Sale Date</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control"
                    value="{{$comic->sale_date}}">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </section>
@endsection