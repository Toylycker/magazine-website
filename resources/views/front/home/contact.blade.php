@extends('front.layouts.app')
@section('title') @lang('app.contact') @endsection
@section('content')

<div class="content bg-image" style="background-image:url('{{ asset('img/partners-background.svg') }}'); Background-repeat:repeat-y; background-position:bottom;background-size:cover;">
  <div class="container">
    <div class="row align-items-stretch no-gutters contact-wrap">
      <div class="col-md-6 my-3">
        <div class="form h-100">
          <h3>@lang('app.contact')</h3>
          <form class="mb-5" action="{{ route('message.store') }}" method="post" id="contactForm" name="contactForm">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group mb-5">
                <label for="" class="col-form-label">@lang('app.username') <span class="text-danger">*</span></label>
                <input type="text" placeholder="@lang('app.username')" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autocomplete="off" aria-describedby="nameHelp" autofocus required>
              </div>
              <div class="col-md-6 form-group mb-5">
                <label for="" class="col-form-label">@lang('app.email') <span class="text-danger">*</span></label>
                <input type="email" placeholder="@lang('app.email')" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autocomplete="off" aria-describedby="emailHelp" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group mb-5">
                <label for="" class="col-form-label">@lang('app.number') <span class="text-danger">*</span></label>
                <div class="d-flex justify-content-center align-items-center bg-color-b">+993<input type="number" placeholder="@lang('app.number')" class="ps-1 form-control @error('number') is-invalid @enderror" name="phone" id="phone" autocomplete="off" min="61000000" max="65999999" aria-describedby="numberHelp" required></div>
              </div>
              <div class="col-md-6 form-group mb-5">
                <label for="" class="col-form-label">@lang('app.company')</label>
                <input type="text" placeholder="@lang('app.company')" class="form-control @error('company') is-invalid @enderror" name="company" id="company" autocomplete="off" aria-describedby="companyHelp">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group mb-5">
                <label for="message" class="col-form-label">@lang('app.message') <span class="text-danger">*</span></label>
                <textarea class="form-control @error('text') is-invalid @enderror" rows="8" placeholder="@lang('app.message')..." name="text" id="text" autocomplete="off" maxlength="500" aria-describedby="textHelp" required></textarea>
              </div>
            </div>
            <div class="row">

              <div class="col-md-12 mt-4 text-center">
                <button type="submit" class="btn btn-danger">@lang('app.send')</button>
              </div>
            </div>
          </form>

          <div id="form-message-warning mt-4"></div>
          <div id="form-message-success">
            Your message was sent, thank you!
          </div>

        </div>
      </div>
      <div class="col-md-6 map my-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145.5825885501336!2d58.4089893961272!3d37.96353123812067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6fff2572ae1d91%3A0x375de90b80c18fe0!2sAkEnMar!5e0!3m2!1sen!2snl!4v1656863356120!5m2!1sen!2snl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>

<style>
  body {
    /* font-family: "Roboto", sans-serif; */
    background-color: #fff;
    line-height: 1.9;
    color: #8c8c8c;
    background-color: #efefef;
    position: relative;
  }

  /* h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", sans-serif;
  color: #000; } */

  a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
  }

  a,
  a:hover {
    text-decoration: none !important;
  }

  .text-black {
    color: #000;
  }

  .content {
    padding: 7rem 0;
  }

  .heading {
    font-size: 2.5rem;
    font-weight: 900;
  }

  .form-control {
    border: none;
    border-bottom: 1px solid #ccc;
    padding-left: 0;
    padding-right: 0;
    border-radius: 0;
    background: none;
  }

  .form-control:active,
  .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000;
  }

  .col-form-label {
    color: #000;
    font-size: 13px;
  }

  /* .btn, .form-control, .custom-select {
  height: 45px; } */

  .custom-select:active,
  .custom-select:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000;
  }

  /* .btn {
  border: none;
  border-radius: 0;
  font-size: 12px;
  letter-spacing: .2rem;
  text-transform: uppercase; } */

  .btn.btn-primary {
    background: #35477d;
    color: #fff;
    padding: 15px 20px;
  }

  .btn:hover {
    color: #fff;
  }

  .btn:active,
  .btn:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  .contact-wrap .col-form-label {
    font-size: 14px;
    color: #b3b3b3;
    margin: 0 0 10px 0;
    display: inline-block;
    padding: 0;
  }

  .contact-wrap .form,
  .contact-wrap .contact-info {
    padding: 40px;
  }

  .contact-wrap .contact-info {
    color: rgba(255, 255, 255, 0.5);
  }

  .contact-wrap .contact-info ul li {
    margin-bottom: 15px;
    color: rgba(255, 255, 255, 0.5);
  }

  .contact-wrap .contact-info ul li .wrap-icon {
    font-size: 20px;
    color: #fff;
    margin-top: 5px;
  }

  .contact-wrap .form {
    background: #fff;
  }

  .contact-wrap .form h3 {
    color: #35477d;
    font-size: 20px;
    margin-bottom: 30px;
  }

  .contact-wrap .contact-info {
    height: 100vh;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
  }

  .contact-wrap .contact-info a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
  }

  @media (max-width: 1199.98px) {
    .contact-wrap .contact-info {
      height: 400px !important;
    }
  }

  .contact-wrap .contact-info h3 {
    color: #fff;
    font-size: 20px;
    margin-bottom: 30px;
  }

  label.error {
    font-size: 12px;
    color: red;
  }

  #message {
    resize: vertical;
  }

  #form-message-warning,
  #form-message-success {
    display: none;
  }

  #form-message-warning {
    color: #B90B0B;
  }

  #form-message-success {
    color: #55A44E;
    font-size: 18px;
    font-weight: bold;
  }

  .submitting {
    float: left;
    width: 100%;
    padding: 10px 0;
    display: none;
    font-weight: bold;
    font-size: 12px;
    color: #000;
  }
</style>
@endsection