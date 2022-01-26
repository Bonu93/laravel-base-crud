@extends('layouts.main')

@section('content')

    <section class="container">
        <div class="row">
            <div class="col-6">
                <img src="{{$comic->image}}" alt="">
            </div>
            <div class="col-6">
                <h2>{{$comic->title}}</h2>
                <h3>{{$comic->series}}</h3>
                <div class="price">
                    Price: <span class="badge">{{$comic->price}}</span>
                </div>
                <div class="date">
                    Date: <span class="badge">{{$comic->sale_date}}</span>
                </div>
                <p>{{$comic->description}}</p>
            </div>
        </div>
    </section>
    
    
@endsection