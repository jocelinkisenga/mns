<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>s'inscrire</title>
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
</head>
<body>
    <div class="row justify-center" style="justify-content: center; margin-top:10%">
        <form action="{{route('register')}}" method="POST">
            @csrf
          <div class="col-md-6 col-lg-12">
            <label for="validationCustom01" class="form-label">nom</label>
            <input type="text" class="form-control" name="name" id="validationCustom01" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6 col-lg-12">
            <label for="validationCustomUsername" class="form-label">email</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="email" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-12">
            <label for="validationCustom02" class="form-label">mot de passe</label>
            <input type="text" name="password" class="form-control" id="validationCustom02"  required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit </button>
          </div>
        </form>
    </div>
</body>
</html>