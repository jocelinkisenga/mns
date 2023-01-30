<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>M&S</title>
  <link rel="stylesheet" href="{{asset('client/assets/css/app.css')}}">
  
  <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css " rel="stylesheet">

  <link rel="stylesheet" href="{{asset('client/assets/css/style.css')}}">
 
  @livewireStyles
  
</head>
<body class="w-full overflow-hidden overflow-y-auto">

@include("Client.navs.navbar")
@yield("content")
<<<<<<< HEAD

@include("client.navs.footer")
=======
@include("Client.navs.footer")
>>>>>>> c4d00a672fbe5e8298a3d431dc19e9e8849b9533

@livewireScripts
@notifyJs
<script  src="{{asset('client/assets/js/app.js')}}"></script>
<script  src="{{asset('client/assets/js/bootstrap.min.js')}}"></script>
<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js "></script> 
<script  src="{{asset('client/assets/js/lightbox-plus-jquery.min.js')}}"></script>
@include('sweetalert::alert')

    
<script>
          window.addEventListener('swal',function(e){
            Swal.fire(e.detail);
        });

</script>
</body>

</html>

