<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="loginPage/estilos.css">
    <link rel="stylesheet" href="loginPage/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
  </head>
  <body>
    <div class="contenedor">

      <header>
        <!-- <h1 class="title">Odisea</h1> -->
        <h1 class="title" href="{{ url('/') }}"><a>Soft GYM</a></h1>
        <a href="{{ url('/register') }}">Registrate</a>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="loginPage/img/men.jpg" alt="User">
          <h3>Inicio de Sesión</h3>
          <form class="" action="{{ url('/login') }}" method="post">
          @csrf
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="icon-user"></span><input style="text-align: left;" class="inp" type="email" name="email" value="{{ old('email') }}" placeholder="Email"><br>
              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
              <span class="icon-key"></span><input style="text-align: left;" class="inp" type="password" placeholder="Password" name="password" value=""><br>
              @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label class="check" style="color: white;">
                        <input class="he" type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            <a href="{{ url('/password/reset') }}" class="he">He olvidado mi contraseña</a>
            <input class="boton" type="submit" value="Iniciar Sesión">
          </form>
        </article>
      </div>

    </div>
  </body>
</html>
