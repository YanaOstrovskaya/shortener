<div class="container">
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
@if (session()->has('link'))
  <div class="alert alert-success" role="alert">
    {{ __('link.message_success') }} <a href="{{ session('link') }}" target="_blank"> {{ session('link') }}</a>
  </div>
  @endif
  @if (session('warning'))
  <div class="alert alert-warning" role="alert">
    {{ session('warning') }}
  </div>
  @endif
  @if (session('error'))
  <div class="alert alert-danger" role="alert">
    {{ session('error') }}
  </div>
  @endif
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
</div>