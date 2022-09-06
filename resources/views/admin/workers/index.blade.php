@extends('admin.layouts.app')
@section('title')
@lang('app.workers')
@endsection
@section('content')
<div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 {{$dark?'text-white':'text-dark'}}">@lang('app.workers')</h1>
</div>
<div class="text-center">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createworker">
        <i class="bi bi-plus"></i> @lang('app.add')
    </button>
    <div class="modal fade" id="createworker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('app.add')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.worker.store') }}" method="post" id="workerform" enctype="multipart/form-data">
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
                            <input class="form-control @error('images') is-invalid @enderror" type="file" name="image"  id="images" accept="image/jpeg/png">
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
                            <div class="btn btn-success" id="add_instagram">+</div>
                            <div class="mb-3 instagrams">
                                <input class="form-control @error('instagram') is-invalid @enderror" name="links[instagrams][]" id="instagram" rows="3" maxlength="50">
                                @error('instagram')
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
                            <div class="btn btn-success" id="add_imo">+</div>
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
                            <div class="btn btn-success" id="add_website">+</div>
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
                                <div class="btn btn-success" id="add_map">+</div>
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
                    <a class="btn btn-success" href="{{ route('admin.partner.store') }}" onclick="event.preventDefault(); document.getElementById('workerform').submit();">
                        @lang('app.submit')
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->



<div class="table-responsive bg-white my-3 container-xxl">
    <table class="table table-hover table-bordered table-sm table-striped">
        <thead>
            <tr class="fw-bold">
                <td>@lang('app.image')</td>
                <td>№</td>
                <td>@lang('app.name1')</td>
                <td>@lang('app.description1')</td>
                <td>@lang('app.delete')</td>
            </tr>
        </thead>
        <tbody>
            @forelse($workers as $worker)
            <tr>
                <td><img src="{{$worker->image()}}" alt="" class="img-fluid border rounded"></td>
                <td>{{ $worker->id }}</td>
                <td>{{ $worker->name() }}</td>
                <td>{{ $worker->description() }}</td>
                <td>
                    <form action="{{ route('admin.worker.delete', $worker->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger py-1 px-2"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">@lang('app.not_found')</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
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
    });
</script>
@endsection