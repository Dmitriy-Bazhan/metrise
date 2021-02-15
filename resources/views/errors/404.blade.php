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

    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 72px;
            margin-bottom: 40px;
        }
        a {
            color: #B0BEC5;
        }
    </style>

</head>
<body>

<div class = "container">
    <div class = "content">
        <div class = "title">404 Error</div>
        <a href="/">Click here for back to main page</a>
    </div>
</div>

</body>

