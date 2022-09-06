@extends('admin.layouts.app')
@section('title')
@lang('app.partner_subscriptions')
@endsection
@section('content')
<div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2 {{$dark?'text-white':'text-dark'}}">@lang('app.partner_subscriptions')</h1>
</div>
{{-- search start  --}}
<div class="container-xxl">
  <form action="{{route('admin.partners.subscriptions')}}" method="GET">
    @csrf
    <div class="input-group mb-3">
      <input name="search" class="form-control" type="string" placeholder="@lang('app.search')" value="{{$search?:""}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <button type="submit input-group-text" class="btn btn-secondary" id="basic-addon2"><i class="bi bi-search"></i></button>
    </div>
  </form>
</div>
{{-- search end  --}}

<div class="table-responsive bg-white my-3 container-xxl">
  <table class="table table-hover table-bordered table-sm table-striped">
    <thead>
      <tr class="fw-bold">
        <td>@lang('app.company')</td>
        <td>@lang('app.total_subscriptions')</td>
        <td>@lang('app.email')</td>
        <td>@lang('app.delete')</td>
      </tr>
    </thead>
    <tbody>
      @forelse($partners as $partner)
      <tr>
        <td>{{ $partner->name() }}</td>
        <td>{{ $partner->subscriptions->count() }}</td>
        <td>@foreach ($partner->subscriptions as $subscription)
          <span><a href="mailto:{{$subscription->mail}}">{{$subscription->mail}}</a> - </span>
          @endforeach
        </td>
        <td>
          <form action="{{ route('admin.subscription.delete', $partner->id)}}" method="post">
            @csrf
            @method('DELETE')
            <label class="mx-3" for="email">@lang('app.mail')</label>
              <div class="col-2 d-flex">
                <input type="email" name="mail" class="m-3">
                <button type="submit" class="btn my-2 btn-danger py-1 px-2"><i class="bi bi-trash-fill"></i></button>
              </div>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td class="text-center" colspan="8">@lang('app.not_found')</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection