@extends('layout')
@section('title', 'AJC-Internet')

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
            <div class="col col-lg-4 col-md-6 border rounded shadow p-4">
                <form action="{{route('login.post')}}" method="POST">
                    @csrf
                    <h3 class="text-center mb-3">Login</h3>
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" required />
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required />
                    <button type="submit" class="form-control btn btn-primary mt-3 mb-2">Login</button>
                    <div class="row mt-3">
                        <div class="col-12">
                            <span>Not yet register? <a href="{{route('register')}}">Click here!</a></span>
                        </div>
                        <div class="col-12 mt-2">
                            <a href="">Forgot password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
