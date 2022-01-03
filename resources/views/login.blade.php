@extends('layouts.app')

@section('title','Login')

@section('content')


<section>

    <style>
        @media screen and (max-width: 600px) {
            .inputBox{
                width: 500px;
            }
        }
    </style>

    <div class="imageBox">
        <img src="{{asset('image/school1.jpg')}}" alt="">
    </div>

    <div class="contentBox">
        <div class="formBox">
            <h4>Selamat Datang</h4>
            <br>
            <h1>Silahkan Login</h1>

            <form class="was-validated" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="inputBox">
                    <span>Email</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="inputBox">
                    <span>Password</span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="remember">
                    <label for="">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        Ingat Saya!</label>
                </div>

                <div class="inputBox">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Lupa Password ?') }}
                </a>
                @endif

            </form>
        </div>
    </div>
</section>

@endsection