@extends('layouts.main')

@section('content')
    <section class="container">
        <h2>Comics</h2>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card text-dark">
                        <img src="{{$comic['image']}}" alt="">
                        <h4>{{$comic['title']}}</h4>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection