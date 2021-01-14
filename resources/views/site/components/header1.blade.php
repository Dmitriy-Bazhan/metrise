<div class="container-fluid header-1">

    <div class="row">

        <div class="d-none d-sm-block col-sm-5 col-md-5 col-lg-5 phone-block-left">

            @if(isset($phones[0]))

                <span class="phone-tube">&#9990;&nbsp;</span>
                <span class="phone-number"> {{ isset($phones[0]) ? $phones[0] : '' }}</span>

            @endif

        </div>

        <div class="d-none d-sm-block col-sm-5 col-md-5 col-lg-5 phone-block-right">

            @if(isset($phones[1]))

                <span class="phone-tube">&#9990;&nbsp;</span>
                <span class="phone-number">{{ isset($phones[1]) ? $phones[1] : '' }}</span>

            @endif

        </div>

        <div class="d-sm-none d-md-none d-lg-none col-8">

            @if(isset($phones[0]))
                <a href="tel:+8{{ isset($phones[0]) ? $phones[0] : '' }}">
                    <span class="phone-tube">&#9990;&nbsp;</span>
                    <span class="phone-number">{{ isset($phones[0]) ? $phones[0] : '' }}</span>
                </a>
                <br>
            @endif
            @if(isset($phones[1]))
                <a href="tel:+8{{ isset($phones[1]) ? $phones[1] : '' }}">
                    <span class="phone-tube">&#9990;&nbsp;</span>
                    <span class="phone-number">{{ isset($phones[1]) ? $phones[1] : '' }}</span>
                </a>
            @endif
        </div>

        <div class="col-4 col-sm-2 col-md-2 col-lg-2">

            @if ( app()->getLocale() == 'ua' )

                <span class="lang-link-disabled">UA</span>
                <span class="lang-link-enabled">|</span>
                <a class="lang-link-enabled" href=" {{ $path }} "><span>RU</span></a>

            @else

                <a class="lang-link-enabled" href=" {{ $path }}"><span>UA</span></a>
                <span class="lang-link-enabled">|</span>
                <span class="lang-link-disabled">RU</span>

            @endif

        </div>

    </div>


</div>
