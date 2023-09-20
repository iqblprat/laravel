@extends('layouts.main')

@section('container')
    <main class="form-signin w-100 m-auto">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" name="username"
                    class="form-control rounded-top @error('username')
                is-invalid
                @enderror"
                    id="username" placeholder="Username" value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password"
                    class="form-control rounded-bottom @error('password')
                    is-invalid
                @enderror"
                    id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Login</button>
        </form>
        <small class="mt-1 d-block text-center">
            Not registered? <a href="/register">Register Now</a>
        </small>
    </main>
@endsection
