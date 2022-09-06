@extends('admin.layouts.app')
@section('title')
@lang('app.users')
@endsection
@section('content')
@auth
<div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 {{$dark?'text-white':'text-dark'}}">@lang('app.users')</h1>
</div>
{{-- add user start  --}}
<div class="container-xxl text-center my-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-plus"></i> @lang('app.add')
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('app.add')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.users.create')}}" method="POST" id="add_user_form">
                        <form action="{{route('admin.users.create')}}" method="POST" id="add_user_form">
                            @csrf

                            <div class="mb-3">
                                <label for="username" class="form-label">@lang('app.username')</label>
                                <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">@lang('app.password')</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <button type="submit" class="btn btn-danger my-3">@lang('app.add')</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- add user end  --}}
</div>

{{-- search start  --}}
<div class="container-xxl">
    <form action="{{route('admin.users')}}" method="GET">
        @csrf
        <div class="input-group mb-3">
            <input name="username" class="form-control" type="string" placeholder="@lang('app.search')" value="{{$search?$search:''}}" aria-describedby="basic-addon2">
            <button type="submit" class="btn btn-secondary" id="basic-addon2"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>

{{-- search end  --}}
<div class="container-xl bg-secondary">
    <div class="row {{$dark?'text-white':'text-dark'}} border">
        @forelse($users as $user)
        <div class="col-11 border">{{$user->username}}</div>
        <div class="col-1 border text-center">
            <form action="{{route('admin.users.delete', $user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </form>
        </div>
        @empty
        <h4>@lang('app.not_found')</h4>
        @endforelse
    </div>

</div>

@endauth
@endsection