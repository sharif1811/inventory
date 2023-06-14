@extends('layouts.app')

@section('content')
<div class="container p-5" style="background-color:green; ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Register Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group my-2">
                            <label for="name" class=""><strong>{{ __('Name') }}</strong></label><br>

                                <input id="name" placeholder="Enter Your Name..." type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group my-2">
                            <label for="email" class=""><strong>{{ __('Email Address') }}</strong></label> <br>
                                <input id="email" placeholder="Enter Your Email..." type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group my-2">
                            <label for="password" class=""><strong>{{ __('Password') }}</strong></label> <br>
                                <input id="password" placeholder="Enter Password..." type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group my-2">
                            <label for="password-confirm" class=""><strong>{{ __('Confirm Password') }}</strong></label>
                                <input id="password-confirm" placeholder="Enter Confirm Password..." type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn btn-primary d-block my-3" style="display:block; width:100%;">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
