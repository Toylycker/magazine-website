@extends('front.layouts.app')
@section('title') @lang('app.blog') @endsection
@section('content')
<main class="container-xxl">
    @auth
    {{-- create partner --}}
    <div class="container-xxl mt-5 text-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus"></i> @lang('app.add')
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">@lang('app.create_partner')</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.blog.store') }}" method="post" id="blogform" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">
                                    @lang('app.name')
                                </label>
                                <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" rows="3" maxlength="2550">
                                @error('name')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name_ru" class="form-label fw-bold">
                                    @lang('app.name_ru')
                                </label>
                                <input class="form-control @error('name_ru') is-invalid @enderror" name="name_ru" id="name_ru" rows="3" maxlength="2550">
                                @error('name_ru')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject_id" class="form-label fw-bold">
                                    @lang('app.category') <span class="text-danger">*</span>
                                </label>
                                @foreach($subjects as $subject)
                                <input class="form-check-input" type="checkbox" id="flexCheck-v-{{ $subject->id }}" name="subjects[]" value="{{ $subject->id }}">>
                                <label class="form-check-label" for="flexCheck-v-{{ $subject->id }}">{{ $subject->name }}</label>
                                @endforeach

                                @error('subject_id')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">
                                    @lang('app.description')
                                </label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3" maxlength="2550"></textarea>
                                @error('description')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description_ru" class="form-label fw-bold">
                                    @lang('app.description_ru')
                                </label>
                                <textarea class="form-control @error('description_ru') is-invalid @enderror" name="description_ru" id="description_ru" rows="3" maxlength="2550"></textarea>
                                @error('description_ru')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="images" class="form-label fw-bold">@lang('app.images')</label>
                                <input class="form-control @error('images') is-invalid @enderror" type="file" name="images[]" multiple id="images" accept="image/jpeg/png">
                                @error('images')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="video" class="form-label fw-bold">@lang('app.video')</label>
                                <input class="form-control @error('video') is-invalid @enderror" type="file" name="video" id="video" accept="video/mp4">
                                @error('video')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>


                            {{-- links phone --}}
                            <div class="links_container" name="links[]">
                                <label for="phones" class="form-label fw-bold">
                                    @lang('app.phones')
                                </label>
                                <div class="btn btn-success my-3" id="add_phone">+</div>
                                <div class="mb-3 phones">
                                    <input class="form-control @error('phones') is-invalid @enderror" name="links[phones][]" id="phone" rows="3" maxlength="50">
                                    @error('phones')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            {{-- links instagram --}}
                            <div class="links_container" name="links[]">
                                <label for="instagram" class="form-label fw-bold">
                                    @lang('app.instagram')
                                </label>
                                <div class="btn btn-success my-3" id="add_instagram">+</div>
                                <div class="mb-3 instagrams">
                                    <input class="form-control @error('instagram') is-invalid @enderror" name="links[instagrams][]" id="instagram" rows="3" maxlength="50">
                                    @error('instagram')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            {{-- links tiktok --}}
                            <div class="links_container" name="links[]">
                                <label for="tiktok" class="form-label fw-bold">
                                    @lang('app.tiktok')
                                </label>
                                <div class="btn btn-success my-3" id="add_tiktok">+</div>
                                <div class="mb-3 tiktoks">
                                    <input class="form-control @error('tiktok') is-invalid @enderror" name="links[tiktoks][]" id="tiktok" rows="3" maxlength="50">
                                    @error('tiktok')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            {{-- links  mail--}}
                            <div class="links_container" name="links[]">
                                <label for="mail" class="form-label fw-bold">
                                    @lang('app.mail')
                                </label>
                                <div class="btn btn-success my-3" id="add_mail">+</div>
                                <div class="mb-3 mails">
                                    <input class="form-control @error('mails') is-invalid @enderror" name="links[mails][]" id="mail" rows="3" maxlength="50">
                                    @error('mails')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            {{-- links  imo--}}
                            <div class="links_container" name="links[]">
                                <label for="imo" class="form-label fw-bold">
                                    @lang('app.imo')
                                </label>
                                <div class="btn btn-success my-3" id="add_imo">+</div>
                                <div class="mb-3 imos">
                                    <input class="form-control @error('imos') is-invalid @enderror" name="links[imos][]" id="imo" rows="3" maxlength="50">
                                    @error('phones')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            {{-- links  website--}}
                            <div class="links_container" name="links[]">
                                <label for="website" class="form-label fw-bold">
                                    @lang('app.website')
                                </label>
                                <div class="btn btn-success my-3" id="add_website">+</div>
                                <div class="mb-3 websites ">
                                    <input class="form-control @error('phones') is-invalid @enderror" name="links[websites][]" id="website" rows="3" maxlength="50">
                                    @error('phones')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- links  map--}}
                                <div class="links_container" name="links[]">
                                    <label for="map" class="form-label fw-bold">
                                        @lang('app.map')
                                    </label>
                                    <div class="btn btn-success my-3" id="add_map">+</div>
                                    <div class="mb-3 maps">
                                        <input class="form-control @error('maps') is-invalid @enderror" name="links[maps][]" id="map" rows="3" maxlength="50">
                                        @error('maps')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success" href="{{ route('admin.blog.store') }}" onclick="event.preventDefault(); document.getElementById('blogform').submit();">
                            Submit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth

    <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 tm-text-primary tm-categories-text">@lang('app.categories')</h1>
    </div>
    <div class="tm-categories-container mb-5">
        <div class="splide container-xxl">
            <div class="splide__track">
                <ul class="splide__list position-relative text-center">
                    <li class="splide__slide mx-4 mx-md-0 h5 nav-item tm-category-item"><a href="{{route('blogs', "0")}}" class="nav-link tm-category-link {{$f_subject?'':'active'}}">@lang('app.all_categories')</a></li>
                    @foreach ($subjects as $subject)
                        @if ($subject->id==$f_subject)
                            <li class="splide__slide mx-4 mx-md-0 h5 nav-item tm-category-item"><a href="{{route('blogs', $subject->id)}}" class="nav-link tm-category-link {{$subject->id==$f_subject?'active':""}}">{{$subject->name()}}</a></li>    
                        @endif
                    @endforeach
                    @foreach ($subjects as $subject)
                        @if ($subject->id!=$f_subject)
                            <li class="splide__slide mx-4 mx-md-0 h5 nav-item tm-category-item"><a href="{{route('blogs', $subject->id)}}" class="nav-link tm-category-link {{$subject->id==$f_subject?'active':""}}">{{$subject->name()}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row tm-catalog-item-list justify-content-center">
        @foreach ($posts as $post)
        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item" data-aos="fade-up">
            <div class="position-relative tm-thumbnail-container">
                @if ($post->images->count()>=1)
                @foreach ($post->images as $image)
                <img src="{{$image->blog_image()}}" alt="Image" class="img-fluid">
                <p class="position-absolute top-0 end-0 mx-3">
                    {{ $post->created_at->format('d-m-Y') }}
                </p>
                @break
                @endforeach
                @else
                <img src="{{asset('img/0kSOoGuuaJ-32.jpg')}}" alt="Image" class="img-fluid">
                <p class="position-absolute top-0 end-0 mx-3">
                    {{ $post->created_at->format('d-m-Y') }}
                </p>
                @endif
                <a href="{{ route('blogs.show', $post->slug) }}" class="position-absolute tm-img-overlay">

                </a>
            </div>
            <div class="p-4 tm-bg-gray overflow-hidden tm-catalog-item-description">
                <div class="rounded-3 overflow-hidden" style="height: 250px;">
                    @auth
                    <form class="position-absolute top-0 start-0 m-3" action="{{route('admin.blogs.delete', $post->slug)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-small btn-danger">@lang('app.delete')</button>
                    </form>
                    @endauth
                    @auth
                    <form class="position-absolute top-0 end-0 m-3" action="{{route('admin.blog.edit', $post->slug)}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-small btn-warning">@lang('app.edit')</button>
                    </form>
                    @endauth
                    <h3 class="tm-text-primary mb-3 overflow-hidden tm-catalog-item-title">{{$post->name()}}</h3>
                    <p class="tm-catalog-item-text overflow-hidden" style="word-wrap: break-word;">{{$post->description()}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div>
        {{$posts->links()}}
    </div>
</main>
<script>
    function setVideoSize() {
        const vidWidth = 1920;
        const vidHeight = 1080;
        let windowWidth = window.innerWidth;
        let newVidWidth = windowWidth;
        let newVidHeight = windowWidth * vidHeight / vidWidth;
        let marginLeft = 0;
        let marginTop = 0;

        if (newVidHeight < 500) {
            newVidHeight = 500;
            newVidWidth = newVidHeight * vidWidth / vidHeight;
        }

        if (newVidWidth > windowWidth) {
            marginLeft = -((newVidWidth - windowWidth) / 2);
        }

        if (newVidHeight > 720) {
            marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
        }

        const tmVideo = $('#tm-video');

        tmVideo.css('width', newVidWidth);
        tmVideo.css('height', newVidHeight);
        tmVideo.css('margin-left', marginLeft);
        tmVideo.css('margin-top', marginTop);
    }

    $(document).ready(function() {
        /************** Video background *********/

        setVideoSize();

        // Set video background size based on window size
        let timeout;
        window.onresize = function() {
            clearTimeout(timeout);
            timeout = setTimeout(setVideoSize, 100);
        };

        // Play/Pause button for video background      
        const btn = $("#tm-video-control-button");

        btn.on("click", function(e) {
            const video = document.getElementById("tm-video");
            $(this).removeClass();

            if (video.paused) {
                video.play();
                $(this).addClass("fas fa-pause");
            } else {
                video.pause();
                $(this).addClass("fas fa-play");
            }
        });
    })
</script>
<script>
    AOS.init();
    var splide = new Splide('.splide', {
        type: 'loop',
        drag: 'free',
        pagination: false,
        arrows: false,
        // autoplay: true,
        perPage: 3.5,
        perMove: 1,
    });

    splide.mount();
</script>
<script>
    $(document).ready(function() {
        $("#add_phone").click(function(e) {
            e.preventDefault();
            $('<input class="form-control my-3" name="links[phones][]" rows="3" maxlength="50">').appendTo(".phones");
        });

        $("#add_instagram").click(function(e) {
            e.preventDefault();
            $('<input class="form-control my-3" name="links[instagrams][]" rows="3" maxlength="50">').appendTo(".instagrams");
        });

        $("#add_mail").click(function(e) {
            e.preventDefault();
            $('<input class="form-control my-3" name="links[mails][]" rows="3" maxlength="50">').appendTo(".mails");
        });

        $("#add_imo").click(function(e) {
            e.preventDefault();
            $('<input class="form-control my-3" name="links[imos][]" rows="3" maxlength="50">').appendTo(".imos");
        });

        $("#add_website").click(function(e) {
            e.preventDefault();
            $('<input class="form-control my-3" name="links[websites][]" rows="3" maxlength="50">').appendTo(".websites");
        });

        $("#add_map").click(function(e) {
            e.preventDefault();
            $('<input class="form-control my-3" name="links[maps][]" rows="3" maxlength="50">').appendTo(".maps");
        });

        $("#add_tiktok").click(function(e) {
            e.preventDefault();
            $('<input class="form-control my-3" name="links[tiktoks][]" rows="3" maxlength="50">').appendTo(".tiktoks");
        });
    });
</script>
<style>
    h2,
    p {
        color: #666666;
    }

    .tm-site-header {
        position: absolute;
        z-index: 1000;
        width: 100%;
        top: 0;
        left: 0;
        padding: 40px;
    }

    .tm-logo-container {
        display: block;
        padding: 30px;
        width: 320px;
        height: 160px;
    }

    .tm-site-logo {
        font-size: 3rem;
    }

    .tm-site-name {
        font-size: 1.9rem;
    }

    #tm-video-container {
        max-height: 720px;
        overflow: hidden;
        background-color: #333;
    }

    #tm-video {
        width: 100%;
        height: auto;
    }

    .tm-bg-black {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
    }

    .tm-bg-gray {
        background-color: #F4F4F4;
    }

    .tm-text-primary {
        color: #3399CC;
    }

    .tm-text-secondary {
        color: #3CAFAF;
    }

    .tm-nav-link {
        color: white;
        font-size: 1.4rem;
    }

    #tm-main-nav .nav-item .nav-links {
        border-bottom: 1px solid transparent;
    }

    #tm-main-nav .nav-item.active .nav-links,
    #tm-main-nav .nav-item:hover .nav-links {
        border-bottom: 1px solid white;
        color: white;
    }

    .tm-welcome-container {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        z-index: 999;
    }

    .tm-welcome-container-inner {
        margin-top: 100px;
    }

    .tm-welcome-text {
        font-size: 1.6rem;
    }

    .btn-primary {
        background-color: #3399CC;
    }

    .btn-primary:hover {
        background-color: #1674a0;
    }

    .tm-btn-animate {
        position: relative;
        overflow: hidden;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: all 0.3s ease;
    }

    .tm-btn-animate:before {
        left: 0;
        top: -100%;
        position: absolute;
        height: 100%;
        width: 100%;
        line-height: 2.5;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        font-family: "Font Awesome 5 Free";
        font-style: normal;
        font-weight: 900;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
    }

    .tm-btn-animate:after {
        content: '';
        position: absolute;
        z-index: -1;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    .tm-btn-animate:hover:before {
        top: 13px;
    }

    .tm-btn-animate span {
        display: inline-block;
        width: 100%;
        height: 100%;
        -webkit-transition: all 0.3s;
        -webkit-backface-visibility: hidden;
        -moz-transition: all 0.3s;
        -moz-backface-visibility: hidden;
        transition: all 0.3s;
        backface-visibility: hidden;
    }

    .tm-btn-animate:hover span {
        -webkit-transform: translateY(300%);
        -moz-transform: translateY(300%);
        -ms-transform: translateY(300%);
        transform: translateY(300%);
    }

    .tm-btn-cta {
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .tm-btn-cta:before {
        font-size: 180%;
    }

    .tm-btn-download:before {
        font-size: 120%;
    }

    .tm-btn-submit:before {
        font-size: 120%;
    }

    .tm-icon-down:before {
        content: '\f078';
    }

    .tm-icon-download:before {
        content: '\f019';
    }

    .tm-icon-submit:before {
        content: '\f1d8';
    }

    .tm-icon-submit:hover:before {
        top: 18px;
    }

    .tm-btn-cta:hover {
        color: white;
    }

    .tm-btn-download:hover,
    .tm-btn-download:focus,
    .tm-btn-submit:hover,
    .tm-btn-submit:focus {
        color: white;
        background-color: #3399CC;
    }

    .tm-btn-download span {
        padding-top: 10px;
    }

    .tm-btn-small {
        padding: 10.5px 35px;
        font-size: 1.2rem;
    }

    #tm-video-control-button {
        position: absolute;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .tm-content-container {
        max-width: 1422px;
        padding-top: 80px;
        padding-bottom: 35px;
    }

    .tm-page-title {
        font-size: 2.5rem;
    }

    .tm-catalog-item-list {
        /* justify-content: space-between; */
    }

    .tm-catalog-item {
        max-width: 462px;
        /* display: flex; */
        /* flex-direction: column; */
        margin-bottom: 64px;
    }

    .tm-thumbnail-container {
        overflow: hidden;
        border-bottom-right-radius: 15px;
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

    .tm-catalog-item-description {
        flex: 1;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .tm-categories-container {
        display: flex;
        align-items: center;
    }

    .tm-categories-text {
        margin-right: 16px;
    }

    .tm-category-list {
        font-size: 1.75rem;
    }

    .tm-category-item {
        margin: 16px;
    }

    .tm-category-link {
        color: #3399CC;
        padding: 10px;
        border-bottom: 3px solid transparent;
    }

    .tm-category-link.active,
    .tm-category-link:hover {
        border-bottom: 3px solid #3399CC;
        color: #3399CC;
    }

    .tm-paging-link {
        background-color: #F4F4F4;
        margin-right: 12px;
        font-size: 1.5rem;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nav-item.active>.tm-paging-link,
    .nav-item:hover>.tm-paging-link {
        background-color: #CCC;
        color: #666666;
    }

    .tm-subscribe-form {
        display: flex;
        align-items: center;
    }

    .tm-subscribe-form>input {
        padding: 5px 15px;
        margin-right: 20px;
        flex: 1;
        max-width: 382px;
    }

    .tm-footer-links>li {
        margin-bottom: 10px;
    }

    /*Video detail page*/

    .tm-video-title {
        font-size: 2.5rem;
    }

    .tm-share-box {
        font-size: 1.4rem;
        padding: 3rem;
    }

    .tm-share-box-title {
        font-size: 1.4rem;
    }

    .tm-bg-white {
        background-color: white;
        border: 1px solid #CDCECF;
        border-radius: 5px;
    }

    .tm-share-button {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 24px;
    }

    .tm-share-button:last-child {
        margin-right: 0;
    }

    .tm-text-link {
        color: #3399CC;
    }

    .tm-likes-box,
    .tm-btn-download {
        width: 280px;
        height: 60px;
    }

    .tm-likes-box {
        padding-top: 12px;
    }

    .tm-video-description-box {
        max-width: 920px;
    }

    .tm-text-gray {
        color: #6F7071;
    }

    .tm-fixed-header {
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #666;
    }

    #tm-fixed-header-bg {
        height: 450px;
    }

    .tm-fixed-header-1 {
        background-image: url(../img/video-detail-1.jpg);
    }

    .tm-fixed-header-2 {
        background-image: url(../img/about-1.jpg);
    }

    .tm-fixed-header-3 {
        background-image: url(../img/contact-1.jpg);
    }


    .fa-facebook {
        color: #3b5998;
    }

    .fa-twitter {
        color: #00acee;
    }

    .fa-pinterest {
        color: #c8232c;
    }

    .tm-liked-icon {
        display: none;
    }

    .tm-not-liked-icon {
        display: inline-block;
    }

    .tm-liked-icon,
    .tm-not-liked-icon {
        margin-top: 3px;
    }

    .tm-liked .tm-liked-icon {
        display: inline-block;
    }

    .tm-liked .tm-not-liked-icon {
        display: none;
    }

    .tm-welcome-text-2 {
        max-width: 575px;
    }

    .tm-share-button:hover {
        background-color: #e9ecef;
    }

    /*About*/
    .tm-about-text-container {
        max-width: 920px;
    }

    .parallax-window {
        min-height: 270px;
        background: transparent;
    }

    .parallax-window-2 {
        min-height: 360px;
    }

    .tm-about-icon {
        color: #999;
    }

    /* Contact */
    .mapouter {
        position: relative;
        text-align: right;
        height: 540px;
        width: 100%;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 540px;
        width: 100%;
    }

    .form-control {
        font-size: 1.2rem;
        padding: 21px 25px;
    }

    .form-group {
        margin-bottom: 35px;
    }

    #contact-select {
        height: 60px;
        border-radius: 0;
    }

    #contact-select:not([multiple]) {
        -webkit-appearance: none;
        -moz-appearance: none;
        background-position: right 15px center;
        background-repeat: no-repeat;
        background-image: url(../img/select-arrow.png);
        padding: 14px 20px;
        padding-right: 20px;
        color: #666;
    }

    .tm-testimonial-text {
        max-width: 420px;
        font-style: italic;
    }

    @media (max-width: 1419px) {
        .tm-catalog-item {
            margin-bottom: 30px;
        }
    }

    @media (max-width: 991px) {

        .tm-welcome-container-inner {
            margin-top: 150px;
        }

        .tm-welcome-text {
            font-size: 1.4rem;
        }

        #tm-video {
            width: 888px;
            height: 500px;
        }

        .tm-logo-container {
            height: 160px;
            width: 250px;
        }

        .tm-site-header {
            padding: 20px;
        }

        .tm-catalog-item-list {
            max-width: 924px;
        }

        .tm-share-box {
            max-width: 400px;
        }
    }

    @media (max-width: 879px) {
        .tm-categories-container {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 640px) {
        .tm-subscribe-form {
            flex-direction: column;
            align-items: stretch;
        }

        .tm-subscribe-form>input {
            max-width: 100%;
        }

        .tm-subscribe-form input {
            margin-right: 0;
            margin-bottom: 15px;
        }

        .tm-share-box {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
    }

    @media (max-width: 419px) {
        .tm-testimonial {
            flex-direction: column;
        }
    }
</style>
@endsection