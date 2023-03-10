<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription</title>
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
        <form class="login" action="{{route('register')}}" method="POST">
          @csrf
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" name="name" class="login__input" placeholder=" Votre nom et post-nom" autocomplete="off">
          </div>
          @error('name')
            <span style="color: red">{{$message}}</span>
          @enderror
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" name="email" class="login__input" placeholder=" Email" autocomplete="off">
          </div>
          @error('email')
            <span style="color: red">{{$message}}</span>
          @enderror
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" name="password" class="login__input" placeholder="Mot de passe" autocomplete="off">
          </div>
          @error('password')
          <span style="color: red">{{$message}}</span>
        @enderror
        <div class="login__field">
          <i class="login__icon fas fa-lock"></i>
          <input type="password" name="confirm" class="login__input" placeholder="Confirmer mot de passe" autocomplete="off">
        </div>
        @error('confirm')
        <span style="color: red">{{$message}}</span>
      @enderror


          <button type="submit" class="button login__submit">
            <span class="button__text">s'inscrire</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>
        </form>

        <div class="social-login">
          <br>

          <a href="{{route('login')}}">Connectez vous</a>
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
