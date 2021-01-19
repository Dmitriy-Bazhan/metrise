<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale() == 'ua' ? 'uk' : 'ru') }}">
<head>
    <meta charset="utf-8">
    <title>@lang('site.title.title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@lang('site.layout.description')">

    <link rel="alternate" hreflang="uk-ua" href="http://metrise.com.ua/">
    <link rel="alternate" hreflang="ru-ua" href="http://metrise.com.ua/ru/">

    <meta name="google-site-verification" content="cH3tZLcmMnlJmJvMGrr7zVeKhRkJZS2cXpGkQAEYF6Q"/>

    <meta property="og:title" content="@lang('site.title.title')">
    <meta property="og:url" content="https://metrise.com.ua/{{ app()->getLocale() == 'ru' ? 'ru/' : '' }}">
    <meta property="og:image" content="{{ asset('images/instrument.jpg') }}">
    <meta property="og:description" content="@lang('site.layout.description')">
    <meta property="og:type" content="website">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Metrise",
        "description": "Мехобработка в Харькове",
        "url": "https://metrise.com.ua/",
        "email": "metrise@gmail.com",
        "contactPoint":
            {
                 "@type": "ContactPoint",
                 "telephone": "+38 0 (99) 915 58 80",
                 "contactType": "customer service"
            },
        "address": "Ул. Плиточная , Харків, Харківська область, 61000"
    }


    </script>

</head>
<body>

<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@if(strlen($path) < 25)

    <div class="first-view">
        <h1 class="first-view-title">{{-- $path --}}METRISE.COM.UA</h1>
    </div>

@endif


<div class="container-fluid">

    <div class="row">

        <div class="col-12 col-sm-10 col-md-10 col-lg-10 offset-0 offset-sm-1 offset-md-1 offset-lg-1 body-container">

            <header>

                @include('site.components.header1')

                @include('site.components.header2')

            </header>

            <br>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-sm-12 col-md-4 col-xl-3 justify-content-center d-none d-sm-none d-md-block">

                        <ul>
                            <li>
                                <a href="{{ url_with_locale('/tokarnaya-obrabotka') }}">
                                    <span class="left-column-text">@lang('site.header.tokarnaya')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/tokarniy-stanok.jpg')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/frezirovanie') }}">
                                    <span class="left-column-text">@lang('site.header.frezirovanie')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/freza-1.jpg')}}" alt=""></a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/shlifovalnye-raboty') }}">
                                    <span class="left-column-text">@lang('site.header.shlifovka')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/shlif.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/zuboreznye-raboty') }}">
                                    <span class="left-column-text">@lang('site.header.zuborezka')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/zuborezka.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/termoobrabotka') }}">
                                    <span class="left-column-text">@lang('site.header.termo')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/termichka.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/pilenie-zagotovok') }}">
                                    <span class="left-column-text">@lang('site.header.pilenie')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/pila.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="{{ url_with_locale('/slesarnye-raboty') }}">
                                    <span class="left-column-text">@lang('site.header.slesarnie')</span>
                                    <img class="left-column-image d-none d-sm-none d-md-block"
                                         src="{{asset('images/slesarnie.jpg')}}" alt="">
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


<script src="{{ asset('js/main_page.js') }}"></script>
</body>
</html>
