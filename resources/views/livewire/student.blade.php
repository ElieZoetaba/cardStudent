@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                 <div class="card shadow-lg border-0 rounded-lg mt-5" style="--img-url:{{ asset('img/student.png')}}" {{--style="background-image: {{url( asset(img/student.png))}}"--}}>
                    <div class="card-body">
                        <div class="card-header bg-primary">
                            <h3 class="text-center font-weight-light text-light my-1">Add a new student</h3>
                        </div>
                        <form action="{{url('/store')}}" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="name" type="text" placeholder="Enter name"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="first_name" type="text"
                                    placeholder="Enter your first name" name="first_name" value="{{ old('first_name') }}"
                                    required autocomplete="" />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="registration_number" type="text"
                                    placeholder="Enter your registration number" name="registration_number"
                                    value="{{ old('registration_number') }}" required autocomplete="" />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="cycle" type="text" placeholder="Enter your cycle"
                                    name="cycle" value="{{ old('cycle') }}" required autocomplete="" />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="level" type="text" placeholder="Enter your level"
                                    name="level" value="{{ old('level') }}" required autocomplete="" />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2  py-1" id="year" type="text" placeholder="Enter your year"
                                    name="year" value="{{ old('year') }}" required autocomplete="" />
                            </div>
                            <div class="form-group">
                                <input class="form-control my-2 py-1" id="photo" type="file" placeholder="Enter your photo"
                                    name="photo" value="{{ old('photo') }}" required autocomplete="" />
                            </div>
                            <div>
                                <input type="submit" value="Save" class="btn btn-primary bg-gradiant" name="mobile">
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





                    {{-- end of add secretaire register form --}}
