@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">@lang('site.orders.title')</h2>

    @if(session('success'))

        <span class="message-success">@lang('site.orders.success')</span>

    @else

        <span class="d-none d-sm-block text-main-column">@lang('site.orders.prompt')</span>
        <div class="d-none d-sm-block row get-image-here">


        </div>

        <div class="d-block d-sm-block d-md-none d-lg-none get-mob-image-here">

            <span class="text-mobile-main-column">@lang('site.orders.prompt')</span>

        </div>

        <form method="POST" action="{{ url_with_locale('/save-orders') }}" enctype="multipart/form-data" class="decor">

            {{ csrf_field() }}

            <div class="form-inner">

                @if($errors->has('images.*'))
                    <span>@lang('site.orders.only_images')</span>
                @endif

                <div>
                    <label for="file" class="add-more-image">@lang('site.orders.add_files')</label>
                    <input class="add-more-image-input" id="file" type="file" name="images[]" multiple>
                </div>

                @if($errors->has('description'))

                    <div class="order-block-with-error">

                    <textarea name="description" placeholder="@lang('site.orders.description')"
                              class="input-description">{{ old('description') }}</textarea>

                    </div>

                @else

                    <div class="order-block-without-error">

                    <textarea name="description" placeholder="@lang('site.orders.description')"
                              class="input-description">{{ old('description') }}</textarea>

                    </div>

                @endif

                @if($errors->has('name'))

                    <div class="order-block-with-error">

                        <input type="text" value="{{ old('name') }}" name="name" placeholder="@lang('site.orders.name')"
                               class="input-name" maxlength="20">

                    </div>

                @else

                    <div class="order-block-without-error">

                        <input type="text" value="{{ old('name') }}" name="name" placeholder="@lang('site.orders.name')"
                               class="input-name" maxlength="20">

                    </div>

                @endif

                @if($errors->has('phone'))

                    <div class="order-block-with-error">

                        <span>@lang('site.orders.how_i_call_you')</span>
                        <input type="tel" value="{{ old('phone') }}" name="phone"
                               placeholder="@lang('site.orders.phone')"
                               class="input-phone-with-error" maxlength="20">

                    </div>

                @else

                    <div class="order-block-without-error">

                        <input type="tel" value="{{ old('phone') }}" name="phone"
                               placeholder="@lang('site.orders.phone')"
                               class="input-phone" maxlength="20">

                    </div>

                @endif

                <div>
                    <input type="submit" value="@lang('site.orders.send')">
                </div>

            </div>

        </form>

    @endif

    <script src="{{ asset('js/orders.js') }}" type="text/javascript"></script>




@endsection
