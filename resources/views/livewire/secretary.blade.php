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
                        <form method="POST" action="">
                            @csrf
                            {{-- register secretary --}}
                            {{-- name, email, password, confirm --}}
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="name" type="text" placeholder="Enter name"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="email" type="email" placeholder="Enter email"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="password" type="password"
                                    placeholder="Enter password" name="password" required autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="password-confirm" type="password"
                                    placeholder="Confirm password" name="password_confirmation" required
                                    autocomplete="new-password" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block my-2" type="submit">Register</button>
                                <a class="btn btn-danger btn-block my-2" href="{{ route('home') }}">
                                    Return to home
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

                    {{-- end of add secretaire register form --}}
