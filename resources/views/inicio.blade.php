<body>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href="{{ asset('css/inicio.css') }}" rel="stylesheet">

<script src="https://kit.fontawesome.com/b90e9e4354.js" crossorigin="anonymous"></script>

<article>
    <div class="container-inicio">
        <div class="container-iphone">
            <div class="iphone">
                <img src="" class="phoneimg">
                    <img src="" class="img-background"></img>
                </img>
            </div>
        </div>
        <div class="user">

            <div class="container-user">
                <img src="{{asset('images/logo-letter.png')}}" class="instagram-letter"></img>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" placeholder="Telefono, usuario o correo electronico" name="email"></input>
                    <input type="password" placeholder="Contraseña" name="password"></input>
                    <input type="submit" value="Iniciar-sesion"></input>
                </form>
                <div class="separador">
                    <div></div>
                    <div class="circle"></div>
                    <div></div>
                </div>
                <div class="sesion-facebook">
                    <strong><i class="fab fa-facebook-square"></i></strong>
                    <p>Inicia sesion con Facebook</p>
                </div>
                @error('email')
                        <span class="invalid-feedback" role="alert">
                             <strong>Tu email no es correcta. Vuelve a comprobarla.</strong>
                        </span>
               @enderror
               @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>Tu contraseña no es correcta. Vuelve a comprobarla.</strong>
                        </span>
                @enderror
                <a href="" class="recuperar-contraseña">¿Has olvidado tu contraseña?</a>
            </div>
            <div class="crear-cuenta">
                    <p>¿No tienes cuenta?</p><a href="{{route('register')}}">Registrate</a>
            </div>
            <div class="descargar-app">
                <p>Descarga la aplicacion</p>
                <div class="links-descargar-app">
                    <a><img src="{{asset('images/appstore.png')}}"></img></a>
                    <a><img src="{{asset('images/googleplay.png')}}"></img></a>
                </div>
            </div>
        </div>
    </div>

</article>
</body>
<script src="{{ asset('js/auth/phoneimg.js') }}"></script>