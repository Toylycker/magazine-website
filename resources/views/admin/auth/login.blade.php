@extends('front.layouts.app')
@section('title') @lang('app.login') @endsection
@section('content')
    <div class="container-xl col-12 col-md-5 col-xl-3 col-xxl-3 d-block justify-content-center align-items-center">
        <div class="d-block h4 text-danger border-bottom py-2 mb-3 text-center">
            @lang('app.login')
        </div>

        @if($errors->any())
            <div>
                <div>
                    {{ __('Whoops! Something went wrong.') }}
                </div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label">@lang('app.username')</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">@lang('app.password')</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-danger my-3">@lang('app.login')</button>

        </form>
    </div>
@endsection