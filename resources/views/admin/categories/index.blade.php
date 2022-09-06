@extends('front.layouts.app')
@section('title')
    @lang('app.categories')
@endsection
@section('content')
<div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 {{$dark?'text-white':'text-dark'}}">@lang('app.categories')</h1>
</div>
<div class="text-center">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createcategory">
        <i class="bi bi-plus"></i> @lang('app.add')
    </button>
    <div class="modal fade" id="createcategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('app.add')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.blogs.category.store') }}" method="post" id="categoryform" enctype="multipart/form-data">
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
                    </form>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-success" href="{{ route('admin.blogs.category.store') }}" onclick="event.preventDefault(); document.getElementById('categoryform').submit();">
                        @lang('app.submit')
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="table-responsive bg-white my-3 container-xl text-center">
    <table class="table table-hover table-bordered table-sm table-striped">
        <thead>
            <tr class="fw-bold">
                <td>№</td>
                <td>@lang('app.name1')</td>
                <td>@lang('app.delete')</td>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name() }}</td>
                <td>
                    <form action="{{ route('admin.blogs.category.delete', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger py-1 px-2"><i class="bi bi-trash3-fill"></i></button>
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
@endsection