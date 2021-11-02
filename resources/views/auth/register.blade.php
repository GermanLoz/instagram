
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>


<section class="register">
<div >{{ __('Register') }}</div>
<div class="container-user">
                <img src="{{asset('images/logo-letter.png')}}" class="instagram-letter"></img>
                <p class="register-p">Regístrate para ver fotos y vídeos de tus amigos.</p>
                <div class="sesion-facebook">
                    <strong><i class="fab fa-facebook-square"></i></strong>
                    <p>Iniciar sesion con Facebook</p>
                </div>
                <div class="separador" id="separador">
                    <div></div>
                    <div class="circle"></div>
                    <div></div>
                </div>
                <form method="POST" action="{{ route('register') }}" >
                    @csrf
                    <input type="email" placeholder="Numero de movil o correo electronico" name="email"></input>
                    <input type="text" placeholder="Nombre completo" name="name"></input>
                    <input type="text" placeholder="Nombre de usuario" name="nick"></input>
                    <input type="password" placeholder="Contraseña" name="password"></input>
                    <input type="submit" value="Registrarte"></input>
                </form>
                <p class="politicas">Al registrarte, aceptas nuestras Condiciones, la Política de datos y la Política de cookies.</p>
            </div>
            <div class="tienes-cuenta">
                <p>¿Tienes una cuenta?</p><a href="{{route('/')}}">Entrar</a>
            </div>
            <div class="descargar-app">
                <p>Descarga la aplicacion</p>
                <div class="links-descargar-app">
                    <a><img src="{{asset('images/appstore.png')}}"></img></a>
                    <a><img src="{{asset('images/googleplay.png')}}"></img></a>
                </div>
            </div>
            </div>
        </section> 
        
@section('content')



<!---<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
