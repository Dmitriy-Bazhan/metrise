@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">@lang('site.gallery.title')</h2>

    <div class="d-none d-sm-none d-md-block">

        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="{{ asset('images/freza-1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="{{ asset('images/slesarnie.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="{{ asset('images/termichka.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="10000">
                    <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="...">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div class="col-12 d-sm-block d-md-none d-lg-none">

        <img src="{{ asset('images/freza-1.jpg') }}" class="gallery-image" alt="..."><br>

        <img src="{{ asset('images/slesarnie.jpg') }}" class="gallery-image" alt="..."><br>

        <img src="{{ asset('images/termichka.jpg') }}" class="gallery-image" alt="..."><br>

        <img src="{{ asset('images/1.jpg') }}" class="gallery-image" alt="..."><br>

        <img src="{{ asset('images/2.jpg') }}" class="gallery-image" alt="..."><br>


    </div>
@endsection
