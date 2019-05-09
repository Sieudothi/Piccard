@extends('layout.template')

@section('title')
    Sign in
@endsection

@section('form')
    <div id="form_container">
        @include('elements.signin_form')
    </div>
@endsection