@extends('front.layouts.app')
@section('title') @lang('app.blog') @endsection
@section('content')
<div class="container-xxl">
    <div class="mx-auto tm-content-container">
        <main>
            <div class="row mb-5 pb-4">
                <div class="col-12">
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list position-relative">
                                @if ($post->images->count()>=1)
                                    @foreach ($post->images as $image)
                                        <li class="splide__slide"><img class="img img-fluid" src="{{$image->blog_image()}}" alt=""></li>
                                    @endforeach
                                @else
                                    
                                <li class="splide__slide"><img class="img img-fluid" src="{{asset('img/HrSszvHEeB-31.png')}}" alt=""></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5 pb-5">
                <div class="col-xl-8 col-lg-7">
                    <!-- post description -->
                    <div class="me-4 {{$dark?"text-white-50":"text-black-50"}}">
                        <i class="bi bi-binoculars-fill"></i> {{ $post->viewed }}
                    </div>
                    <div class="tm-video-description-box">
                        <h2 class="mb-5 tm-video-title {{$dark?"text-white":"text-dark"}}">{{$post->name()}}</h2>
                        <p class="mb-4 {{$dark?"text-white":"text-dark"}}">{{$post->description()}}</p>
                    </div>
                </div>
            </div>

            {{-- video start --}}
            <div class="container-xxl">
                @if ($post->video)
                    <video class="container-fluid"  controls>
                        <source src="{{ route('getVideo', $post->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                @endif
            </div>
            {{-- video end --}}

            <div class="row pt-4 pb-5 ">
                <div class="col-12">
                    <h2 class="mb-5 tm-text-primary {{$dark?"text-white":"text-dark"}}">@lang('app.recomended')</h2>
                    <div class="row tm-catalog-item-list">
                        @foreach ($similar as $sim)
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item" data-aos="fade-up">
                            <div class="position-relative tm-thumbnail-container">
                                @if ($sim->images->count()>=1)
                                    @foreach ($sim->images as $image)
                                    <img src="{{$image->blog_image()}}" alt="Image" class="img-fluid">
                                    @break
                                    @endforeach
                                @else
                                    <img src="{{asset('img/about.jpg')}}" alt="Image" class="img-fluid">
                                @endif
                                <a href="{{ route('blogs.show', $sim->slug) }}" class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <h3 class="{{$dark?"text-white":"text-black"}}">{{$sim->name()}}</h3>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<style>
    
    .tm-content-container {
        max-width: 1422px;
        padding-top: 80px;
        padding-bottom: 35px;
    }

    .tm-page-title {
        font-size: 2.5rem;
    }

    .tm-catalog-item-list {
        justify-content: space-between;
    }

    .tm-catalog-item {
        max-width: 462px;
        display: flex;
        flex-direction: column;
        margin-bottom: 64px;
    }

    .tm-thumbnail-container {
        overflow: hidden;
    }

    .tm-thumbnail-container img {
        transition: all 0.3s ease;
    }

    .tm-thumbnail-container:hover img {
        transform: scale(1.2) rotate(5deg);
    }

    .tm-img-overlay {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.4);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tm-overlay-icon {
        color: #a7a7a7;
        opacity: 1;
        font-size: 2rem;
        padding: 10px 15px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-right: 8px;
        z-index: 1002;
        transition: all 0.3s ease;
    }

    .tm-img-overlay:hover {
        background-color: transparent;
    }

    .tm-img-overlay:hover .tm-overlay-icon {
        opacity: 0;
    }

</style>
<script>
    AOS.init();
    const splide = new Splide('.splide', {
        type: 'loop',
        drag: 'free',
        autoplay: true,
    });

    splide.mount();
</script>
@endsection