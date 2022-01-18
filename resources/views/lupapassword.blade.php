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
            <h4>Lupa Password</h4>
            <br>
            <h1>Silahkan Isi form</h1>
			<ul>
     @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
     @endforeach
</ul>
            <form class="was-validated" method="POST" action="{{ route('lupapasswordsubmit') }}">
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
                    <span>Password Baru</span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                 <div class="inputBox">
                    <span>Konfirmasi Password</span>
                    <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                

                <div class="inputBox">
                    <button type="submit" class="btn btn-primary">
                        Ganti
                    </button>
                </div>

               

            </form>
        </div>
    </div>
</section>

@endsection