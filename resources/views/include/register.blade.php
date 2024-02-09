@extends('layout')
@section('title', 'Register Account')

@section('content')
    <div class="container">
        @if($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-succes">{{session('success')}}</div>
        @endif
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 border rounded shadow p-4">
                <form action="{{route('register.post')}}" method="POST">
                    @csrf
                    <div class="row text-center">
                        <p class="text-body-secondary">
                            Use your email that you used at your application.
                        </p>
                    </div>
                    <h3 class="text-center mb-4">Register account</h3>
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" required />
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" name="email" required />
                    <label for="createpassword">Create Password</label>
                    <input type="password" class="form-control" name="password" required />
                    {{-- <label for="confirmpassword">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmpassword" required /> --}}
                    <button type="submit" class="form-control btn btn-primary mt-3 mb-2">Register</button>
                    <div class="row mt-3">
                        <div class="col-12">
                            <span>Already register? <a href="{{route('login')}}">Click here!</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
