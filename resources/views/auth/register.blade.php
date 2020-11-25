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
        <h1 class="title" ><a href="{{ url('/') }}">Soft GYM</a></h1>
        <a href="{{ url('login') }}">Inicia Sesion</a>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="loginPage/img/men.jpg" alt="User">
          <h3>Registrate</h3>
          <form class="" action="{{ url('/register') }}" method="post">
          @csrf

            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <span class="icon-user"></span><input style="text-align: left;" class="inp" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name"><br>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

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

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <span class="icon-key"></span><input style="text-align: left;" class="inp" type="password" placeholder="Confirm password" name="password_confirmation" value=""><br>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label style="color: white;">
                        <input type="checkbox"> I agree to the <a href="#">terms</a>
                    </label>
                </div>
            </div>

            <!-- <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label class="check" style="color: white;">
                        <input class="he" type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div> -->
            <input class="boton" type="submit" value="Register">
          </form>
        </article>
      </div>

    </div>
  </body>
</html>
