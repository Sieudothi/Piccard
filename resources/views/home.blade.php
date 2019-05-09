@extends('layout.template')

@section('head')
    <link rel="stylesheet" href="{{URL:: to('css/home.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/navigation_bar')}}">
    <link rel="stylesheet" href="{{URL::to('css/search_box_home')}}">
    <link href="https://fonts.googleapis.com/css?family=Heebo|Merriweather|Playfair+Display|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
@endsection

@section('title')
    Piccard: Learn words easier
@endsection

@section('header')
    <div class="head_wrapper_home">
        <div class = "gray_layer">
            @include('elements.navigation_bar')
            @include('elements.search_box_home')
        </div>
    </div>
@endsection

@section('main')

@endsection





