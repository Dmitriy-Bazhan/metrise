@extends('site.layout.layout')

@section('content')

    <span class="d-none d-sm-none d-md-block text-main-column">@lang('site.main_page.first_text')</span>
    <span class="d-block d-sm-block d-md-none d-lg-none text-mobile-main-column">@lang('site.main_page.first_text')</span>

    <ul>
        <li>
            <a href="{{ url_with_locale('/tokarnaya-obrabotka') }}">
                <span class="left-column-text">@lang('site.header.tokarnaya')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/frezirovanie') }}">
                <span class="left-column-text">@lang('site.header.frezirovanie')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/shlifovalnye-raboty') }}">
                <span class="left-column-text">@lang('site.header.shlifovka')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/zuboreznye-raboty') }}">
                <span class="left-column-text">@lang('site.header.zuborezka')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/termoobrabotka') }}">
                <span class="left-column-text">@lang('site.header.termo')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/pilenie-zagotovok') }}">
                <span class="left-column-text">@lang('site.header.pilenie')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/slesarnye-raboty') }}">
                <span class="left-column-text">@lang('site.header.slesarnie')</span>
            </a>
        </li>
    </ul>

    <span class="d-none d-sm-none d-md-block text-main-column">@lang('site.main_page.second_text')</span>
    <span class="d-block d-sm-block d-md-none d-lg-none text-mobile-main-column">@lang('site.main_page.second_text')</span>

    <img class="main-page-image" src=" {{ asset('images/instrument.jpg') }}" alt="">
    <img class="main-page-image" src=" {{ asset('images/1.jpg') }}" alt="">
    <img class="main-page-image" src=" {{ asset('images/2.jpg') }}" alt="">
    <img class="main-page-image" src=" {{ asset('images/3.jpg') }}" alt="">


@endsection
