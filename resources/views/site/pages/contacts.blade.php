@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">@lang('site.contacts.title')</h2>

    <br>

    @if(isset($phones) && count($phones) > 0)

        @foreach($phones as $phone)

            <h4 class="text-main-column">Телефон : {{ $phone }}</h4>

        @endforeach

    @endif

    <br>

    @if(isset($emails) && count($emails) > 0)

        @foreach($emails as $email)

            <h4 class="text-main-column">E-mail : metrise@gmail.com{{-- $email --}}</h4>

        @endforeach

    @endif

    <div class="contacts-footer"></div>


@endsection
