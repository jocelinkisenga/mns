<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>M&S</title>
  <link rel="stylesheet" href="{{asset('Client/assets/css/app.css')}}">
  
  <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css " rel="stylesheet">
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}"> 

  <link rel="stylesheet" href="{{asset('Client/assets/css/style.css')}}">
 
  @livewireStyles
  
</head>
<body class="w-full overflow-hidden overflow-y-auto">

@include("client.navs.navbar")
@yield("content")




@include("client.navs.footer")

@livewireScripts
@notifyJs
<script  src="{{asset('Client/assets/js/app.js')}}"></script>
<script  src="{{asset('Client/assets/js/bootstrap.min.js')}}"></script>
<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js "></script> 

<script  src="{{asset('Client/assets/js/lightbox-plus-jquery.min.js')}}"></script>
@include('sweetalert::alert')

    
<script>
          window.addEventListener('swal',function(e){
            Swal.fire(e.detail);
        });

</script>

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>

</html>

