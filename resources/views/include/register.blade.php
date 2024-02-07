@extends('layout')
@section('title', 'Register Account')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 border rounded shadow p-4">
                <form action="">
                    <div class="row text-center">
                        <p class="text-body-secondary">
                            Use your email that you used at your application.
                        </p>
                    </div>
                    <h3 class="text-center mb-4">Register account</h3>
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" name="email" required />
                    <label for="createpassword">Create Password</label>
                    <input type="text" class="form-control" name="ceatepassword" required />
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="text" class="form-control" name="confirmpassword" required />
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