@extends('front.layouts.app')
@section('title')
    @lang('app.app-description')
@endsection
@section('content')
    <!-- Banner Image -->
    <div class="banner text-center bg-image" data-scroll-index='0'>
        <img class="img img-fluid" src="{{ asset('img/welcome_photo.png') }}" alt="">
    </div>
    <!-- End Banner Image -->

    <!-- About -->
    <div class="about-us section-padding {{ $dark ? 'text-white' : 'text-dark' }}" data-scroll-index='1'>
        <div class="container ">
            <div class="col-md-12 section-title text-center" data-aos="zoom-in-left" data-aos-duration="1500">
                <h3>@lang('app.we_are_best')</h3>
                <span class="section-title-line"></span>
            </div>
            <div class="row">
                <div class="col-md-6 mb-10 order-2 order-md-1 ">
                    <div class="section-info">
                        <div class="sub-title-paragraph" data-aos="zoom-in-left" data-aos-duration="1500">
                            <h4 class="{{ $dark ? 'text-white' : 'text-dark' }}">@lang('app.you_can_conquer_the_world')</h4>
                            <h5>@lang('app.quote2')</h5>
                            <p style="font-size: 18px;">@lang('app.body')</p>
                            <p style="font-size: 18px;">@lang('app.body2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-10 order-1 order-md-2" data-aos="zoom-in-right" data-aos-duration="1500">
                    <div class="section-img img-fluid">
                        <img src="{{ asset('img/download-33.jpg') }}" alt="" class=" img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Services -->
    <div class="services section-padding rounded-3 container-xxl" data-scroll-index='2'>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center">
                    <h3>@lang('app.best_service')</h3>
                    {{-- <p>Vestibulum elementum dui tempus dolor gravida, vel mattis erat fermentum.</p> --}}
                    <span class="section-title-line"></span>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="bi bi-graph-up-arrow"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Chart Line </h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="bi bi-person-check-fill"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Quick Anouncement </h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="bi bi-geo-alt-fill"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Mark Location @lang('app.money')</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="bi bi-bug"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Bug Solution @lang('app.money')</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="bi bi-chat-text-fill"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Fast Communication @lang('app.money')</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-30">
                    <div class="service-box bg-white text-center">
                        <div class="icon"> <i class="bi bi-brush"></i> </div>
                        <div class="icon-text">
                            <h4 class="title-box">Clean Design @lang('app.money')</h4>
                            <p>Sed malesuada, est eget condimentum iaculis, nisi ex facilisis metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-dark">
        <div class="container-xl fw-bold h2 text-center text-white py-5">@lang('app.brilliants')
            <div class="row justify-content-around align-items-center">
                <div class="col-6"><a href="https://bossan-concept.com/?lang=ru"><img class="img-fluid py-5"
                            src="{{ asset('img/bossan.png') }}"></a></div>
                <div class="col-6"><a href="https://aktam.info/"><img class="img-fluid py-5" width="250"
                            src="{{ asset('img/aktam.png') }}"></a></div>
            </div>
        </div>
    </div>

    <!-- End Services -->

    {{-- workers start --}}
    <!-- Swiper -->
    <div class="container-fluid bg-image rounded-3 my-3"
        style="background-image:url('{{ asset('img/worker-arena.png') }}'); background-position:bottom;background-size:cover;">
        <div class="swiper" style="height:850px; position:relative;">
            <div class="swiper-wrapper">
                @foreach ($workers as $worker)
                    <div class="swiper-slide">
                        <div class="imgBx" style="border-end-end-radius: 20px;border-end-start-radius: 20px;">
                            <img class="img-fluid" src="{{ $worker->image() }}" width="300" height="300">
                        </div>
                        <div class="details container bg-white" style="min-height: 60%;">
                            <h3 class="text-danger">{{ $worker->name() }}</h3>
                            <p>{{ $worker->description() }}</p>
                        </div>
                        <div class="container text-center justify-content-center bg-white"
                            style="border-end-start-radius:10px;border-end-end-radius:10px;">
                            @foreach ($worker->links as $link)
                                @if ($link)
                                    <a class="mx-2 i-hover color:red"
                                        href="https://www.instagram.com/{{ $link->link }}">
                                        <div class="instagram ic mb-3"><i class="bi bi-instagram ic h5 instagram"
                                                style="font-size:30px;color: rgb(240, 10, 10);"></i></div>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- worker end --}}

    {{-- books section --}}
    <div class="page-section my-3">
        <div class="splide2 container-xxl">
            <div class="splide__track">
                <ul class="splide__list position-relative text-center">
                    @foreach ($magazines as $magazine)
                        <li class="splide__slide ">
                            <div class="mx-3 my-md-0" data-aos="zoom-in-right" data-aos-duration="1500">
                                <div class="card-service">
                                    <div class="header">
                                        <img src="{{ asset('img/' . $magazine->photo) }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="body text-center">
                                        <h5 class="text-secondary my-3">{{ $magazine->name }}</h5>
                                        <a href="{{ asset('books/' . $magazine->filename) }}" download
                                            class="btn btn-danger"><i class="bi bi-download"></i> @lang('app.download')</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    {{-- end books section --}}
    </div>
    {{-- comments --}}
    <!-- Carousel wrapper -->
    <div class="container-xxl " style="min-height: 400px;">
        <div class="splide my-3 container" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="text-center" style="min-height: 450px;">
                            <img class="rounded-circle img img-fluid shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
                                style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">Maria Kate</h5>
                                    <p class="text-danger">Photographer</p>
                                    <p class="text-muted">
                                        <i class="bi bi-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="text-center">
                            <img class="rounded-circle img img-fluid shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
                                style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">John Doe</h5>
                                    <p class="text-danger">Web Developer</p>
                                    <p class="text-muted">
                                        <i class="bi bi-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis.
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="text-center">
                            <img class="rounded-circle img img-fluid shadow-1-strong mb-4"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
                                style="width: 150px;" />
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <h5 class="mb-3">Anna Deynah</h5>
                                    <p class="text-danger">UX Designer</p>
                                    <p class="text-muted">
                                        <i class="bi bi-quote-left pe-2"></i>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                        nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                    </p>
                                </div>
                            </div>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- comment end --}}
    <script>
        var swiper = new Swiper('.swiper', {
            effect: 'coverflow',
            grabCursor: true,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 1200,
                disableOnInteraction: false,
            },
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 500,
                modifier: 1,
                slideShadows: true,
            },
            on: {
                init() {
                    this.el.addEventListener('mouseenter', () => {
                        this.autoplay.stop();
                    });

                    this.el.addEventListener('mouseleave', () => {
                        this.autoplay.start();
                    });
                }
            },
        });
    </script>
    <script>
        var splide = new Splide('.splide', {
            direction: 'ttb',
            height: '30rem',
            type: 'loop',
            autoplay: true,
            arrows: false,
        });

        splide.mount();

        var splide = new Splide('.splide2', {
            type: 'loop',
            drag: 'free',
            pagination: false,
            arrows: false,
            autoplay: window.innerWidth < 768 ? true : {{ $magazines->count() >= 4 ? 'true' : 'false' }},
            perPage: window.innerWidth < 768 ? 2 : 3,
            perMove: 1,
        });

        splide.mount();
    </script>
@endsection
