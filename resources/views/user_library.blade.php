@extends('layout.template')


@section('head')
    <link rel="stylesheet" href="{{URL:: to('css/user_library.css')}}">
@endsection
@section('title')
    User Name
@endsection

@section('body')

    @section('header')
        <div class="head_user_library">
            @include('elements.navigation_bar')
        </div>
    @endsection

    @section('main')
        @include('elements.action_bar')
    @endsection

    @section('footer')


    @endsection


@endsection
