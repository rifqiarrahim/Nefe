@extends('layouts/template')

@section('container')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-6">
            <img src="{{ asset('img/jumbImg2 (Small).jpg') }}" alt="">
        </div>
        <div class="col-6">
            <form action="/login" method="POST">
                @csrf
                <h5 class="display-5"><a href="/" style="text-decoration: none;">KafeIn</a> Login</h5>
                <div class="mb-3">
                    <label for="emailLabel" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailLabel" name="email" value="{{ old('email')}}" autofocus>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="passLabel" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="passLabel" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-text mb-3">Don't have an account? <a href="/register" style="text-decoration: none;">register here!</a></div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection