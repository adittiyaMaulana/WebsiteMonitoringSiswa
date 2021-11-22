    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <title>Login</title>
    </head>

    <body>

        <section>

            <div class="imageBox">
                <img src="{{asset('image/school1.jpg')}}" alt="">
            </div>

            <div class="contentBox">
                <div class="formBox">
                    <h4>Selamat Datang</h4>
                    <br>
                    <h1>Silahkan Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class=" inputBox">
                            <span>Email</span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="inputBox">
                            <span>Password</span>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="remember">
                            <label for="">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
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

                        <!-- <div class="inputBox">
                            <p>Lupa Password ? <a href="#">Ganti Password</a></p>
                        </div> -->

                    </form>
                </div>
            </div>
        </section>
    </body>

    </html>
