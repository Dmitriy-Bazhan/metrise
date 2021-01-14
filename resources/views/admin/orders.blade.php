@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-1 d-none d-sm-none d-md-block">
            <span class="table-title-text">ID</span>
        </div>

        <div class="col-lg-1 d-none d-sm-none d-md-block">
            <span class="table-title-text">Имя заказчика</span>
        </div>

        <div class="col-lg-1 d-none d-sm-none d-md-block">
            <span class="table-title-text">Телефон</span>
        </div>

        <div class="col-lg-4 d-none d-sm-none d-md-block">
            <span class="table-title-text">Описание</span>
        </div>

        <div class="col-lg-4 d-none d-sm-none d-md-block">
            <span class="table-title-text">Изображение</span>
        </div>

        <div class="col-lg-1 d-none d-sm-none d-md-block">
            <span class="table-title-text">Дата</span>
        </div>

        <div class="col-lg-1 d-none d-sm-none d-md-block">
            <span class="table-title-text">Действие</span>
        </div>

    </div>

    <hr>

    @if($orders->count() > 0)

        @foreach($orders as $order)

            <div class="row">

                <div class="col-12 col-sm-12 col-md-1 col-lg-1">
                    <span class="table-title-text d-sm-block d-md-none d-lg-none">Id :</span>
                    <span>{{ $order->id }}</span>
                </div>


                <div class="col-12 col-sm-12 col-md-1 col-lg-1">
                    <span class="table-title-text d-sm-block d-md-none d-lg-none">Имя заказчика :</span>
                    <span>{{ $order->name }}</span>
                </div>

                <div class="col-12 col-sm-12 col-md-1 col-lg-1">
                    <span class="table-title-text d-sm-block d-md-none d-lg-none">Телефон :</span>
                    <span>{{ $order->phone }}</span>
                </div>

                <div class="col-12 col-sm-12 col-md-1 col-lg-4 description-in-table">
                    <span class="table-title-text d-sm-block d-md-none d-lg-none">Описание :</span><br>
                    <span class="d-none d-sm-none d-md-block d-lg-block">{{ $order->description }}</span>
                    <span
                        class="d-sm-block d-md-none d-lg-none mobile-descriptions">{{ $order->description }}</span>
                </div>

                <div class="col-lg-3 d-none d-sm-none d-md-block d-lg-block">

                    @if(!is_null($order->images))

                        @php($images = json_decode($order->images,true))

                        @foreach($images as $image)

                            <img src="{{ asset('storage/orders/order-' . $order->id . '/' . $image) }}"
                                 class="image-in-table image-in-table-show">

                        @endforeach


                    @else

                        <img src="{{ asset('images/no-img.png') }}"
                             class="image-in-table">

                    @endif
                </div>

                <div class="col-12 d-sm-block d-md-none d-lg-none">
                    <span class="table-title-text">Изображение :</span><br>
                    @if(!is_null($order->images))

                        @php($images = json_decode($order->images,true))

                        @foreach($images as $image)

                            <img src="{{ asset('storage/orders/order-' . $order->id . '/' . $image) }}"
                                 class="image-in-mobile-table">

                        @endforeach


                    @else

                        <img src="{{ asset('images/no-img.png') }}"
                             class="image-in-table">

                    @endif
                </div>

                <div class="col-lg-1">
                    <span class="table-title-text d-sm-none d-md-none d-lg-none col-1">Дата :</span>
                    <span>{{ $order->created_at }}</span>

                </div>

                <div class="col-lg-1 remove-order d-none d-sm-block" data-id="{{ $order->id }}"
                     data-token="{{ csrf_token() }}">
                    <span class="table-title-text">Удалить</span>
                </div>

            </div>

            <hr>
            <hr class="d-block d-sm-block d-md-none d-lg-none">
            <hr class="d-block d-sm-block d-md-none d-lg-none">

        @endforeach

    @else

        <p>Нет записей</p>

    @endif

    <script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>

@endsection
