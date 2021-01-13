<div class="container-fluid">

    <div class="row">

        <div class="col-9 col-sm-3 col-md-2 col-lg-2">

            <a href="{{ url_with_locale('/') }}"><img class="logo-img" src="{{ asset('images/instrument.jpg') }}"><span
                    class="header-2-logo-text">METRISE</span></a>

        </div>

        <nav class="col-2 navbar navbar-dark bg-transparent d-md-none d-lg-none ">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="collapse" id="navbarToggleExternalContent">

            <div class="bg-transparent p-4">

                <div class="col-12">

                    <a href="{{ url_with_locale('/tokarnaya') }}">
                        <span class="left-column-text">@lang('site.header.tokarnaya')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a href="{{ url_with_locale('/frezirovka') }}">
                        <span class="left-column-text">@lang('site.header.frezirovanie')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a href="{{ url_with_locale('/shlifovka') }}">
                        <span class="left-column-text">@lang('site.header.shlifovka')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a href="{{ url_with_locale('/zuborezka') }}">
                        <span class="left-column-text">@lang('site.header.zuborezka')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a href="{{ url_with_locale('/termo') }}">
                        <span class="left-column-text">@lang('site.header.termo')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a href="{{ url_with_locale('/pila') }}">
                        <span class="left-column-text">@lang('site.header.pilenie')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a href="{{ url_with_locale('/slesarnie') }}">
                        <span class="left-column-text">@lang('site.header.slesarnie')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a class="header-2-text" href="{{ url_with_locale('/about_us') }}">
                        <span class="left-column-text">@lang('site.header.about_us')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a class="header-2-text" href="{{ url_with_locale('/gallery') }}">
                        <span class="left-column-text">@lang('site.header.gallery')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a class="header-2-text" href="{{ url_with_locale('/orders') }}">
                        <span class="left-column-text">@lang('site.header.orders')</span>
                    </a>

                </div>

                <div class="col-12">

                    <a class="header-2-text" href="{{ url_with_locale('/contacts') }}">
                        <span class="left-column-text">@lang('site.header.contacts')</span>
                    </a>

                </div>

            </div>

        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-2 d-none d-sm-block">

            <a class="header-2-text" href="{{ url_with_locale('/about_us') }}">@lang('site.header.about_us')</a>

        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-2 d-none d-sm-block">

            <a class="header-2-text" href="{{ url_with_locale('/gallery') }}">@lang('site.header.gallery')</a>

        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-2 d-none d-sm-block">

            <a class="header-2-text" href="{{ url_with_locale('/orders') }}">@lang('site.header.orders')</a>

        </div>

        <div class="col-12 col-sm-2 col-md-2 col-lg-2 offset-xl-2 offset-md-2 offset-sm-1 d-none d-sm-block">

            <a class="header-2-text" href="{{ url_with_locale('/contacts') }}">@lang('site.header.contacts')</a>

        </div>

    </div>

</div>
