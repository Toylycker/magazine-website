@extends('admin.layouts.app')
@section('title')
    @lang('app.messages')
@endsection
@section('content')
  <div class="d-flex justify-content-center align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 {{$dark?'text-white':'text-dark'}}">@lang('app.messages')</h1>
  </div>

  <div class="table-responsive bg-white container-xxl">
    <table class="table table-hover table-bordered table-sm table-striped">
      <thead>
        <tr class="fw-bold">
          <td>№</td>
          <td>@lang('app.name1')</td>
          <td>@lang('app.email')</td>
          <td>@lang('app.phone')</td>
          <td>@lang('app.company')</td>
          <td>@lang('app.message')</td>
          <td>@lang('app.sent')</td>
          <td>@lang('app.delete')</td>
        </tr>
      </thead>
      <tbody>
        @forelse($messages as $message)
        <tr>
          <td>{{ $message->id }}</td>
          <td>{{ $message->name }}</td>
          <td><a class="text-link text-decoration-none" title="@lang('app.push')" href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
          <td><a class="text-link text-decoration-none" title="@lang('app.push')" href="tel:+993{{ $message->phone }}">+993{{ $message->phone }}</a></td>
          <td>{{ $message->company }}</td>
          <td>{{ $message->text }}</td>
          <td>{{ $message->created_at->format('d.m.Y - H:i') }}</td>
          <td>
            <form action="{{ route('admin.messages.delete', $message->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger py-1 px-2"><i class="bi bi-trash-fill"></i></button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td class="text-center" colspan="8">-</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  {{ $messages->links() }}
  @endsection