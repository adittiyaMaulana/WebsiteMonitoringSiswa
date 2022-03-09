@extends('layouts.app')

@section('content')

<section>

    <?php

    use App\Models\Foto;

    $foto = Foto::first();
    ?>

    <div class="imageBox">
        <img src="/foto/{{$foto->nama}}" class="card-img-top" alt="gambar">
    </div>

    <div class="contentBox">
        <div class="formBox">

        @if(session()->has('error'))
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show ml-4 mt-5 mr-4" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                    <use xlink:href="#exclamation-triangle-fill" />
                </svg>
                <div>
                    {{ session()->get('error') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        @endif
        
            <h4>Selamat Datang</h4>
            <br>
            <h1>Silahkan Login</h1>
            <form method="POST" action="{{ route('login') }}">

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

                <input type="checkbox" onclick="myFunction()"> Lihat Password

                <div class="inputBox">
                    <input type="submit" value="Masuk" name=""><br>
                    <!-- <a class="btn btn-danger form-control" style="border-radius: 30px;"  href="{{ '/auth/redirect'}}">Login Google</a> -->
                </div>


                <div class="inputBox">
                    <p>Lupa Password ?
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('lupapassword') }}">
                            Ganti Password
                        </a>
                        @endif
                    </p>
                </div>

            </form>

        </div>
    </div>
</section>

<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
@endsection