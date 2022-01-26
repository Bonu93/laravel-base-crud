@extends('layouts.main')

@section('content')
    <section class="container">
        <h2>Comics</h2>
        <a href="{{ route('comics.create')}}" class="btn btn-primary mb-4">Create new</a>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card mh-600 p-4 mb-4 text-dark">
                        
                        <img src="{{$comic->image}}" alt="" class="mb-2">
                        
                        <h4>{{$comic->title}}</h4>

                        <div class="cta text-center my-5">
                            <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary">Show details</a>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection