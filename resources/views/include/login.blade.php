@extends('layout')
@section('title', 'AJC-Internet')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col col-lg-4 col-md-6 border rounded shadow p-4">
                <form action="">
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
