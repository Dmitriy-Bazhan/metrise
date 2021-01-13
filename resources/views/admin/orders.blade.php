@extends('layouts.app')

@section('content')

    @if($orders->count() > 0)

        <table rules="all" bordercolor="black">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
            </tr>


            @foreach($orders as $order)

                <tr>

                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->description }}</td>

                    @if(!is_null($order->images))

                        @php($images = json_decode($order->images,true))

                        <td>

                            @foreach($images as $image)

                            <img src="{{ asset('storage/orders/order-' . $order->id . '/' . $image) }}" style="width: 50px;height: 50px;">

                            @endforeach

                        </td>


                    @else

                        <td>Нет фото</td>

                    @endif


                </tr>

            @endforeach

        </table>

    @else

        <p>Нет записей</p>

    @endif

    <script>
        $('img').hover(function(){
            $(this).css({'position':'absolute','top' : '300px','left' : '300px','width' : '500px', 'height' : 'auto'});
        });

        $('img').mouseleave(function(){
            $(this).css({'position':'relative','top' : '0px','left' : '0px','width' : '50px', 'height' : '50px'});
        });
    </script>

@endsection
