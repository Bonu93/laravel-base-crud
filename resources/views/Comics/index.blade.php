@extends('layouts.main')

@section('content')
    <section class="container">
        <h2>Comics</h2>
        <a href="{{ route('comics.create')}}" class="btn btn-primary mb-4">Create new</a>
        <div class="row">
            @if (session('delete-comic'))
                <div class="alert alert-success">
                    {{session('delete-comic')}}
                    Comic successfully deleted
                </div>
            @else
                
            @endif
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card mh-600 p-2 mb-4 text-dark">
                        
                        <img src="{{$comic->image}}" alt="" class="mb-2">
                        <div class="text">
                            <h4>{{$comic->title}}</h4>
                        </div>

                        <div class="cta text-center my-5">
                            <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-primary w-100 mb-2">Show details</a>

                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success w-100 mb-2">Edit</a>


                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Are you sure you want to delete this comic?')">Delete</button>

                            </form>
                        </div>
                        
                    </div>
                </div>
            @endforeach
            {{$comics->links()}}
        </div>
    </section>
@endsection