<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Адаптивный макет</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>

@include('site.components.header1')

@include('site.components.header2')

<br>
<br>
<br>
<br>
<br>
<br>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-4 col-xl-3">
            <span class="phone-number">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores et ex magni minima voluptatibus.
                  Aliquid consequuntur eius id iusto modi molestias quo.
                  Accusantium aliquam aliquid aperiam autem culpa deserunt,
                  dicta dolor dolores error esse excepturi exercitationem fugit hic illo impedit labore laudantium
                  optio praesentium quas quod repudiandae sed tempora temporibus?</span>
            <span class="phone-number">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores et ex magni minima voluptatibus.
                  Aliquid consequuntur eius id iusto modi molestias quo.
                  Accusantium aliquam aliquid aperiam autem culpa deserunt,
                  dicta dolor dolores error esse excepturi exercitationem fugit hic illo impedit labore laudantium
                  optio praesentium quas quod repudiandae sed tempora temporibus?</span>
        </div>

        <div class="col-sm-12 col-md-8 col-xl-8 offset-xl-1">
            <span  class="phone-number">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores et ex magni minima voluptatibus.
                  Aliquid consequuntur eius id iusto modi molestias quo.
                  Accusantium aliquam aliquid aperiam autem culpa deserunt,
                  dicta dolor dolores error esse excepturi exercitationem fugit hic illo impedit labore laudantium
                  optio praesentium quas quod repudiandae sed tempora temporibus?</span>
            <span class="phone-number">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores et ex magni minima voluptatibus.
                  Aliquid consequuntur eius id iusto modi molestias quo.
                  Accusantium aliquam aliquid aperiam autem culpa deserunt,
                  dicta dolor dolores error esse excepturi exercitationem fugit hic illo impedit labore laudantium
                  optio praesentium quas quod repudiandae sed tempora temporibus?</span>
        </div>

    </div>

</div>
<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
