@extends('front.layouts.app')
@section('title')
@lang('app.partners')
@php
    use App\Enums\TypeNames;
@endphp
@endsection
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="text-center">
                @foreach ($types as $type)
                <button type="button" class="btn btn-success w-50 type-btn {{ $chosen_type == $type->name ? 'active' : '' }}" data-value="{{ $type->name }}">
                        {{ $type->name }}
                    </button>
                @endforeach
            </div>
            <div class="col-lg-12 card-margin">
                <div class="card search-form">
                    <div class="card-body p-0">
                        <form id="search-form" action="{{ route('partners') }}" method="get">
                            <!-- Hidden input to store the selected type -->
                        <input type="hidden" name="chosen_type" id="chosen_type" value="{{ $chosen_type }}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select class="form-control" name="c" id="exampleFormControlSelect1">
                                                <option value="0" {{ $f_category ? '' : 'selected' }}>
                                                    @lang('app.all_categories')
                                                </option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $f_category ? 'selected' : '' }}>
                                                    {{ $category->name() }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                            <input type="text" placeholder="@lang('app.search')" value="{{ $search ?: '' }}" class="form-control" id="search" name="search">
                                        </div>
                                        <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                            <button type="submit" class="btn btn-base">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="our-partners" class="section-padding">
        <div class="container">
            <div class="section-content">
                <div class="heading-section text-center">
                    <h2 class="{{$dark?"text-white":"text-dark"}}">
                        @lang('app.our_partners')
                    </h2>
                    @auth
                    {{-- create partner --}}
                    <div class="container">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPartner">
                            <i class="bi bi-plus"></i> @lang('app.add')
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="createPartner" tabindex="-1" aria-labelledby="createPartnerLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="createPartnerLabel">@lang('app.create_partner')</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.partner.store') }}" method="post" id="partnerform" enctype="multipart/form-data">
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
                                                <label for="type_id" class="form-label fw-bold">
                                                    @lang('app.type') <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select @error('type_id') is-invalid @enderror" id="type_id" name="type_id"
                                                    required>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type->id }}" {{$type->name==TypeNames::TikTok->value?'selected':''}}>
                                                            {{ $type->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('type_id')
                                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="category_id" class="form-label fw-bold">
                                                    @lang('app.category') <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
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
                                                <label for="sort_order" class="form-label fw-bold">
                                                    @lang('app.sort_order') <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" required>
                                                    @for ($i = 1; $i < 7; $i++) <option value="{{ $i }}">
                                                        {{ $i }}
                                                        </option>
                                                        @endfor
                                                </select>
                                                @error('sort_order')
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
                                        <a class="btn btn-success my-3" href="{{ route('admin.partner.store') }}" onclick="event.preventDefault(); document.getElementById('partnerform').submit();">
                                            Submit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth
                </div>
                @foreach ($partners as $partner)
                <div class="bg-holder rounded-3 my-3 ">

                    @include('front.app.partner')
                </div>
                @endforeach
            </div>
            <div class="my-3">
                {{ $partners->links() }}
            </div>
        </div>
    </section>
</div>

<style>
    .type-btn {
        margin: 5px;
        background-color: #28a745;
    }

    .type-btn.active {
        background-color: black;
        color: #fff;
        transform: scale(1.1); /* Slightly increase size */
        transition: transform 0.2s ease-in-out; /* Smooth transition */
    }

    .bg-holder {
        position: relative;
        width: 100%;
        min-height: 100%;
        top: 0;
        right: 0;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        will-change: transform, opacity, filter;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        background-repeat: no-repeat;
        z-index: 0;
    }

    .search-form {
        width: 80%;
        margin: 0 auto;
        margin-top: 1rem;
    }

    .search-form input {
        height: 100%;
        background: transparent;
        border: 0;
        display: block;
        width: 100%;
        padding: 1rem;
        height: 100%;
        font-size: 1rem;
    }

    .search-form select {
        background: transparent;
        border: 0;
        padding: 1rem;
        height: 100%;
        font-size: 1rem;
    }

    .search-form select:focus {
        border: 0;
    }

    .search-form button {
        height: 100%;
        width: 100%;
        font-size: 1rem;
    }

    .search-form button svg {
        width: 24px;
        height: 24px;
    }

    .search-body {
        margin-bottom: 1.5rem;
    }

    .search-body .search-filters .filter-list {
        margin-bottom: 1.3rem;
    }

    .search-body .search-filters .filter-list .title {
        color: #3c4142;
        margin-bottom: 1rem;
    }

    .search-body .search-filters .filter-list .filter-text {
        color: #727686;
    }

    .search-body .search-result .result-header {
        margin-bottom: 2rem;
    }

    .search-body .search-result .result-header .records {
        color: #3c4142;
    }

    .search-body .search-result .result-header .result-actions {
        text-align: right;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .search-body .search-result .result-header .result-actions .result-sorting {
        display: flex;
        align-items: center;
    }

    .search-body .search-result .result-header .result-actions .result-sorting span {
        flex-shrink: 0;
        font-size: 0.8125rem;
    }

    .search-body .search-result .result-header .result-actions .result-sorting select {
        color: #68CBD7;
    }

    .search-body .search-result .result-header .result-actions .result-sorting select option {
        color: #3c4142;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .search-body .search-filters {
            display: flex;
        }

        .search-body .search-filters .filter-list {
            margin-right: 1rem;
        }
    }

    .card-margin {
        margin-bottom: 1.875rem;
    }

    @media (min-width: 992px) {
        .col-lg-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
    }

    .card-margin {
        margin-bottom: 1.875rem;
    }

    .card {
        border: 0;
        box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: border-box;
        border: 1px solid #e6e4e9;
        border-radius: 8px;
    }
</style>

<script>
    $(document).ready(function() {
            // Type button selection
        $('.type-btn').on('click', function() {
            // Remove 'active' class from all buttons
            $('.type-btn').removeClass('active');
            
            // Add 'active' class to the clicked button
            $(this).addClass('active');
            
            // Set the hidden input value to the chosen type
            $('#chosen_type').val($(this).data('value'));
        });

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
@endsection