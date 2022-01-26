@extends('layouts.main')

@section('content')
    <section class="container">
        <h2>Create new comic</h2>
        <div class="row">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="mb-2">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="sale_date">Sale Date</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection