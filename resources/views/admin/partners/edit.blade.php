@extends('front.layouts.app')
@section('title')
    @lang('app.about-us')
@endsection
@section('content')
    <div class="container {{$dark?"text-white":"text-dark"}} my-3">
        <form action="{{ route('admin.partner.update', $partner->id) }}" method="post" id="partnerform" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">
                    @lang('app.name')
                </label>
                <input class="form-control my-3 @error('name') is-invalid @enderror" name="name" id="name" rows="3"
                    maxlength="2550" value="{{$partner->name}}">
                @error('name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name_ru" class="form-label fw-bold">
                    @lang('app.name_ru')
                </label>
                <input class="form-control my-3 @error('name_ru') is-invalid @enderror" name="name_ru" id="name_ru"
                    rows="3" maxlength="2550" value="{{$partner->name_ru}}">
                @error('name_ru')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label fw-bold">
                    @lang('app.category') <span class="text-danger">*</span>
                </label>
                <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id"
                    required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{$partner->category->id==$category->id?'selected':''}}>
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
                <textarea class="form-control my-3 @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3" maxlength="2550">{{$partner->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description_ru" class="form-label fw-bold">
                    @lang('app.description_ru')
                </label>
                <textarea class="form-control my-3 @error('description_ru') is-invalid @enderror" name="description_ru" id="description_ru"
                    rows="3" maxlength="2550">{{$partner->description_ru}}</textarea>
                @error('description_ru')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sort_order" class="form-label fw-bold">
                    @lang('app.sort_order') <span class="text-danger">*</span>
                </label>
                <select class="form-select @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order"
                    required>
                    @for ($i = 1; $i < 7; $i++)
                        <option value="{{ $i }}" {{$i==$partner->sort_order?'selected':''}}>
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
                <input class="form-control my-3 @error('images') is-invalid @enderror" type="file" name="images[]" multiple
                    id="images" accept="image/jpeg/png">
                @error('images')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            {{-- links phone --}}
            <div class="links_container" name="links[]">
                <label for="phones" class="form-label fw-bold">
                    @lang('app.phones')
                </label>
                <div class="btn btn-success" id="add_phone">+</div>
                <div class="mb-3 phones">
                    @foreach ($partner->links as $link)
                        @if ($link->name == 'phone')
                            <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[phones][]" value="{{$link->link}}" id="website" rows="3" maxlength="50">
                        @endif
                    @endforeach
                    <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[phones][]" id="phone" rows="3" maxlength="50">
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
                <div class="btn btn-success" id="add_instagram">+</div>
                <div class="mb-3 instagrams">
                    @foreach ($partner->links as $link)
                        @if ($link->name == 'instagram')
                            <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[instagrams][]" value="{{$link->link}}" id="website" rows="3" maxlength="50">
                        @endif
                    @endforeach
                    <input class="form-control my-3 @error('instagram') is-invalid @enderror" name="links[instagrams][]" id="instagram" rows="3" maxlength="50">
                    @error('instagram')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            {{-- links instagram --}}
            <div class="links_container" name="links[]">
                <label for="tiktok" class="form-label fw-bold">
                    @lang('app.tiktok')
                </label>
                <div class="btn btn-success" id="add_tiktok">+</div>
                <div class="mb-3 tiktoks">
                    @foreach ($partner->links as $link)
                        @if ($link->name == 'tiktok')
                            <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[tiktoks][]" value="{{$link->link}}" id="tiktok" rows="3" maxlength="50">
                        @endif
                    @endforeach
                    <input class="form-control my-3 @error('tiktok') is-invalid @enderror" name="links[tiktoks][]" id="tiktok" rows="3" maxlength="50">
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
                <div class="btn btn-success" id="add_mail">+</div>
                <div class="mb-3 mails">
                    @foreach ($partner->links as $link)
                        @if ($link->name == 'mail')
                            <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[mails][]" value="{{$link->link}}" id="website" rows="3" maxlength="50">
                        @endif
                    @endforeach
                    <input class="form-control my-3 @error('mails') is-invalid @enderror" name="links[mails][]" id="mail" rows="3" maxlength="50">
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
                <div class="btn btn-success" id="add_imo">+</div>
                <div class="mb-3 imos">
                    @foreach ($partner->links as $link)
                        @if ($link->name == 'imo')
                            <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[imos][]" value="{{$link->link}}" id="website" rows="3" maxlength="50">
                        @endif
                    @endforeach
                    <input class="form-control my-3 @error('imos') is-invalid @enderror" name="links[imos][]" id="imo" rows="3" maxlength="50">
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
                <div class="btn btn-success" id="add_website">+</div>
                <div class="mb-3 websites ">
                    @foreach ($partner->links as $link)
                        @if ($link->name == 'website')
                            <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[websites][]" value="{{$link->link}}" id="website" rows="3" maxlength="50">
                        @endif
                    @endforeach
                    <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[websites][]" id="website" rows="3" maxlength="50">
                    @error('phones')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- links  map--}}
            <div class="links_container" name="links[]">
                <label for="map" class="form-label fw-bold">
                    @lang('app.map')
                </label>
                <div class="btn btn-success" id="add_map">+</div>
                <div class="mb-3 maps">
                    @foreach ($partner->links as $link)
                        @if ($link->name == 'map')
                            <input class="form-control my-3 @error('phones') is-invalid @enderror" name="links[maps][]" value="{{$link->link}}" id="website" rows="3" maxlength="50">
                        @endif
                    @endforeach
                    <input class="form-control my-3 @error('maps') is-invalid @enderror" name="links[maps][]" id="map" rows="3" maxlength="50">
                    @error('maps')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            <div class="container">
                <button class="btn btn-success my-3" type="submit">@lang('app.submit')</button>
            </div>
        </form>
    </div>
    <script>
        AOS.init();
        $(document).ready(function () {
        $("#add_phone").click(function (e) { 
            e.preventDefault();
            $('<input class="form-control my-3 my-3" name="links[phones][]" rows="3" maxlength="50">').appendTo(".phones");
        });

        $("#add_instagram").click(function (e) { 
            e.preventDefault();
            $('<input class="form-control my-3 my-3" name="links[instagrams][]" rows="3" maxlength="50">').appendTo(".instagrams");
        });

        $("#add_mail").click(function (e) { 
            e.preventDefault();
            $('<input class="form-control my-3 my-3" name="links[mails][]" rows="3" maxlength="50">').appendTo(".mails");
        });

        $("#add_imo").click(function (e) { 
            e.preventDefault();
            $('<input class="form-control my-3 my-3" name="links[imos][]" rows="3" maxlength="50">').appendTo(".imos");
        });

        $("#add_website").click(function (e) { 
            e.preventDefault();
            $('<input class="form-control my-3 my-3" name="links[websites][]" rows="3" maxlength="50">').appendTo(".websites");
        });

        $("#add_map").click(function (e) { 
            e.preventDefault();
            $('<input class="form-control my-3 my-3" name="links[maps][]" rows="3" maxlength="50">').appendTo(".maps");
        });

        $("#add_tiktok").click(function (e) { 
            e.preventDefault();
            $('<input class="form-control my-3" name="links[tiktoks][]" rows="3" maxlength="50">').appendTo(".tiktoks");
        });
    });
    </script>
@endsection
