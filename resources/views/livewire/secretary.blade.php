@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <div class="card-header bg-primary">
                            <h3 class="text-center font-weight-light text-light my-1">Add user</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control my-2  py-1 @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter name"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="password" type="password"
                                    placeholder="Enter password" name="password" required autocomplete="new-password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="password-confirm" type="password"
                                    placeholder="Confirm password" name="password_confirmation" required
                                    autocomplete="new-password"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password"/>
                            </div>
                            <div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                <a href="{{ route('home') }}" class="btn btn-danger">{{ __('Return') }}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

                    {{-- end of add secretaire register form --}}
