@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">@lang('site.orders.title')</h2>

    @if(session('success'))

        <span class="message-success">Сообщение отправлено. Наш менеджер свяжеться с вами при первой возможности.</span>
    @else


    <div class="d-none d-sm-block row get-image-here">

    </div>

    <div class="d-block d-sm-block d-md-none d-lg-none get-mob-image-here">

    </div>

    <form method="POST" action="{{ url_with_locale('/save-orders') }}" enctype="multipart/form-data" class="decor">

        {{ csrf_field() }}

        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>


        <div class="form-inner">

            <div>
                <label for="file" class="add-more-image">Добавить файлы</label>
                <input class="add-more-image-input" id="file" type="file" name="images[]" multiple>
            </div>

            @if($errors->has('description'))

                <div class="order-block-with-error">

                    <textarea name="description" placeholder="Описание :"
                              class="input-description">{{ old('description') }}</textarea>

                </div>

            @else

                <div class="order-block-without-error">

                    <textarea name="description" placeholder="Описание :"
                              class="input-description">{{ old('description') }}</textarea>

                </div>

            @endif

            @if($errors->has('name'))

                <div class="order-block-with-error">

                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Имя :" class="input-name">

                </div>

            @else

                <div class="order-block-without-error">

                    <input type="text" value="{{ old('name') }}" name="name" placeholder="Имя :" class="input-name">

                </div>

            @endif

            @if($errors->has('phone'))

                <div class="order-block-with-error">

                    <span>Как мы свяжемся с вами?</span>
                    <input type="tel" value="{{ old('phone') }}" name="phone" placeholder="Телефон :"
                           class="input-phone-with-error">

                </div>

            @else

                <div class="order-block-without-error">

                    <input type="tel" value="{{ old('phone') }}" name="phone" placeholder="Телефон для связи:"
                           class="input-phone">

                </div>

            @endif

            <div>
                <input type="submit" value="Отправить">
            </div>

        </div>

    </form>

    @endif

    <script src="{{ asset('js/orders.js') }}" type="text/javascript"></script>




@endsection
