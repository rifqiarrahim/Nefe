@extends('layouts/template')

@section('container')
<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-6">
            <img src="{{ asset('img/jumbImg2 (Small).jpg') }}" alt="">
        </div>
        <div class="col-6">
                <form>
                    <h5 class="display-5">Register</h5>
                    <div class="mb-3">
                        <label for="emailLabel" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailLabel" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="namaLabel" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="namaLabel" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="passLabel" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passLabel" name="password">
                    </div>
                    <div class="form-text mb-3">Already have an account? <a href="/login" style="text-decoration: none;">login here!</a></div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-pen"></i> Register</button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
