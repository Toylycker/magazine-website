@extends('admin.layouts.app')
@section('title') @lang('app.about-us') @endsection
@section('content')
<div class="container-xxl">
    <div class="row">
        <div class="col-6 d-flex justify-content-center align-items-center h3 my-3 border rounded-3 bg-success" style="height: 100px;">
            <a class="text-white text-decoration-none" href="{{route('admin.blogs.subjects')}}"> @lang('app.subjects')</a>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center h3 my-3 border rounded-3 bg-secondary" style="height: 100px;">
            <a class="text-white text-decoration-none" href="{{route('admin.partners.categories')}}">@lang('app.partner_categories')</a>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center h3 my-3 border rounded-3 bg-danger" style="height: 100px;">
            <a class="text-white text-decoration-none" href="{{route('admin.contact.messages')}}">@lang('app.contact_messages')</a>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center h3 my-3 border rounded-3 bg-warning" style="height: 100px;">
            <a class="text-white text-decoration-none" href="{{route('admin.partners.subscriptions')}}">@lang('app.partner_subscriptions')</a>
        </div>
        @if (Auth::user()->boss == true)
        <div class="col-6 d-flex justify-content-center align-items-center h3 my-3 border rounded-3 bg-black" style="height: 100px;">
            <a class="text-white text-decoration-none" href="{{route('admin.users')}}">@lang('app.users')</a>
        </div>
        @endif
        <div class="col-6 d-flex justify-content-center align-items-center h3 my-3 border rounded-3 bg-white" style="height: 100px;">
            <a class="text-dark text-decoration-none" href="{{route('admin.workers')}}">@lang('app.workers')</a>
        </div>
    </div>
</div>
@endsection