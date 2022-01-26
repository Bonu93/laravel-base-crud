@extends('layouts.main')

@section('content')
    <h2>{{$comic->title}}</h2>
    <img src="{{$comic->image}}" alt="">
@endsection