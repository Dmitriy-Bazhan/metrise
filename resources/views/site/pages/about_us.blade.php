@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">О нас</h2>

    <img class="image-main-column" src=" {{ asset('images/about_us.jpg') }}">
    <span class="text-main-column">@lang('site.about_us.text')</span>

    <div class="contacts-footer"></div>

@endsection
