<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@lang('site.title.title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>

<script src="{{ asset('js/jquery-3.4.1.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

<div class="container-fluid">

    <div class="row">

        <div class="col-12 col-sm-10 col-md-10 col-lg-10 offset-0 offset-sm-1 offset-md-1 offset-lg-1 body-container">

            @include('site.components.header1')

            @include('site.components.header2')

            <br>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-12 col-md-4 col-xl-3 justify-content-center d-none d-sm-none d-md-block">

                        <ul>
                            <li>
                                <a href="{{ url_with_locale('/tokarnaya') }}">
                                    <span class="left-column-text">@lang('site.header.tokarnaya')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/tokarniy-stanok.jpg')}}"></a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/frezirovka') }}">
                                    <span class="left-column-text">@lang('site.header.frezirovanie')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/freza-1.jpg')}}"></a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/shlifovka') }}">
                                    <span class="left-column-text">@lang('site.header.shlifovka')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/shlif.jpg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/zuborezka') }}">
                                    <span class="left-column-text">@lang('site.header.zuborezka')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/zuborezka.png')}}">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/termo') }}">
                                    <span class="left-column-text">@lang('site.header.termo')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/termichka.jpg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/pila') }}">
                                    <span class="left-column-text">@lang('site.header.pilenie')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/pila.jpg')}}">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/slesarnie') }}">
                                    <span class="left-column-text">@lang('site.header.slesarnie')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/slesarnie.jpg')}}">
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-8 col-xl-8 offset-lg-1 main-block">

                        @yield('content')

                    </div>


                </div>

            </div>

        </div>

    </div>

</div>



<script src="{{ asset('js/main_page.js') }}" type="text/javascript"></script>
</body>
</html>
