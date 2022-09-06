<nav class="navbar navbar-expand-lg navbar-dark py-3 {{ Route::current()->getName() == 'partners' ? '' : 'sticky-top' }}" aria-label="Fifth navbar example">
    <div class="container-xl text-center glow-on-hover">
        <a class="navbar-brand navbar-brand-dynamic-color fade-page " href="{{ route('home') }}"><img src="{{ asset('img/akenmar-pr-agency.png') }}" width="150" height="40"></a>
        <button class="navbar-toggler bg-dark bg-opacity-50 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ms-auto text-center">
                @auth
                <li class="nav-item">
                    <a class="text-white nav-link fw-bold a" href="{{ route('dashboard') }}"> @lang('app.dashboard') </a>
                </li>
                @endauth
                <li class="nav-item">
                    <a class="text-white nav-link fw-bold a" href="{{ route('home') }}"> @lang('app.home') </a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link fw-bold a" href="{{ route('blogs', "0") }}"> @lang('app.blog') </a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link fw-bold a" href="{{ route('partners') }}">@lang('app.partners')</a>
                </li>
                <li class="nav-item">
                    <a class="text-white nav-link fw-bold a" href="{{ route('message') }}">@lang('app.contact')</a>
                </li>
            </ul>
            <form action="#">
                <div class="mx-lg-3 mx-0 p-lg-0 pb-3 d-flex justify-content-lg-start justify-content-evenly">
                    <a class="mx-2 t-hover" href="https://twitter.com/">
                        <div class="twitter ic"><i class="bi bi-twitter ic h5 twitter"></i></div>
                    </a>

                    <a class="mx-2 s-hover" href="https://www.skype.com/">
                        <div class="skype ic"><i class="bi bi-skype ic h5 skype"></i></div>
                    </a>
                    <a class="mx-2 i-hover" href="https://www.instagram.com/">
                        <div class="instagram ic"><i class="bi bi-instagram ic h5 instagram"></i></div>
                    </a>
                    <a class="mx-2 i-hover" href="https://www.facebook.com/">
                        <div class="facebook ic"><i class="bi bi-facebook ic h5 facebook"></i></div>
                    </a>
                </div>
            </form>
            <div class="mx-lg-3 mx-0 p-lg-0 pb-3 d-flex justify-content-lg-start justify-content-evenly">
                @if(app()->isLocale('tm'))
                <a class="mx-3" href="{{ route('language', 'ru') }}">
                    <div class="text-white fs-5 fw-bold">RU</div>
                </a>
                @else
                <a class="mx-3" href="{{ route('language', 'tm') }}">
                    <div class="text-white fs-5 fw-bold">TM</div>
                </a>
                @endif
                @if ($dark)
                <a class="mx-2" href="{{route('setback')}}">
                    <div class="text-white fs-5 fw-bold" id="sun"><i class="bi bi-sun-fill h5"></i></div>
                </a>
                @else
                <a class="mx-2" href="{{route('setback')}}">
                    <div class="text-white fs-5 fw-bold" id="moon"><i class="bi bi-moon-fill h5"></i></div>
                </a>
                @endif
            </div>
            @auth
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn-hover nav-link btn bg-danger text-light text-uppercase" style="width: 100%;">
                    <div>@lang('app.logout')</div>
                </button>
            </form>
            @endauth
        </div>
    </div>
</nav>
<div>
    @include('front.app.alert')
</div>