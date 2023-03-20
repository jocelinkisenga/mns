<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>
    <link rel="stylesheet" href="{{asset('Client/assets/css/login.css')}}">
</head>
<body>

  <div class="container">

    <div class="screen">
      <div class="screen__content">
        <br>
        <center>

          <a href="/" class="container">
            <img src="{{asset('Client/assets/images/MS Logo JPG.jpg')}}" alt="M and S logo"></a>
      </center>

        <form class="login" action="{{route('login')}}" method="POST">
          @csrf
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" name="email" class="login__input" placeholder=" Email" autocomplete="off">
          </div>
          @error('email')
            <span style="color: red">{{$message}}</span>
          @enderror
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" name="password" class="login__input" placeholder="Password" autocomplete="off">
          </div>
          @error('password')
          <span style="color: red">{{$message}}</span>
        @enderror
          <button type="submit" class="button login__submit">
            <span class="button__text">se connecter</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>
        </form>
        <a href="{{route('password.request')}}"  class="" style="margin-left: 125px; color:rgb(65, 62, 62); font:bold;">Mot de passe oublié?
        </a>

        <div class="social-login">

          <a href="{{route('register')}}"> Créer un compte </a>
        </div>

      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>
    </div>
  </div>
</body>
</html>
