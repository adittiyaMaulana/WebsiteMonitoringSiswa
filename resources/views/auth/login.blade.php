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

                <div class="remember">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Ingatkan Saya!!!
                        </label>
                    </div>
                </div>

                <div class="inputBox">
                    <input type="submit" value="Masuk" name=""><br><center>atau</center>
                    <a class="btn btn-danger form-control" style="border-radius: 30px;"  href="{{ '/auth/redirect'}}">Login Google</a>
                </div>
               

                <div class="inputBox">
                    <p>Lupa Password ?
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Ganti Password
                        </a>
                        @endif
                    </p>
                </div>

            </form>

        </div>
    </div>
</section>
@endsection