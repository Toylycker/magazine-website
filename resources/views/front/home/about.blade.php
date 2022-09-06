@extends('front.layouts.app')
@section('title') @lang('app.about-us') @endsection
@section('content')
<section class="mb-4 container-xl">
    <h2 class="h1-responsive font-weight-bold text-center my-4">@lang('app.about-us')</h2>
    <div class="row">
        <div class="col-12 col-xl-6 col-xxl-6" data-aos="zoom-in-right" data-aos-duration="2000">
            <img class="img-fluid" src="{{asset('img/about.jpg')}}" alt="" data-aos="zoom-in-right">
        </div>
        <div class="col-12 col-xl-6 col-xxl-6 mt-3" data-aos="zoom-in-left">
            <p>@lang('app.body')</p>
            <p>@lang('app.body2')</p>
        </div>
    </div>
</section>
<script>
  AOS.init();
</script>
@endsection