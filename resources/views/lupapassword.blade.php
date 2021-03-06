@extends('layouts.app')

@section('title','Lupa Password')

@section('content')


<?php

use App\Models\Foto;

$foto = Foto::first();
?>

<section>

    <style>
        @media screen and (max-width: 600px) {
            .inputBox {
                width: 500px;
            }
        }
    </style>

    <div class="imageBox">
        <img src="/foto/{{$foto->nama}}" alt="">
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

                <input class="mb-4" type="checkbox" onclick="passwordBaru()"> Lihat Password


                <div class="inputBox">
                    <span>Konfirmasi Password</span>
                    <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <input class="mb-4" type="checkbox" onclick="konfirmasiPassword()"> Lihat Password




                <div class="inputBox">
                    <button type="submit" class="btn btn-primary">
                        Ganti
                    </button>
                </div>



            </form>
        </div>
    </div>
</section>

<script>
    function passwordBaru() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function konfirmasiPassword() {
        var x = document.getElementById("password_confirmation");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

@endsection