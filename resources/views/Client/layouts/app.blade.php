<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  

<!-- Balises Meta de base -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- SEO: Titre et description -->
<title>Bs - Investissements | Pièces Auto, Moto & Construction</title>
<meta name="description" content="Bs - Investissement propose des pièces de qualité pour véhicules, motos et équipements de construction. Fiabilité, robustesse et innovation au service de vos projets.">

<!-- Mots-clés -->
<meta name="keywords" content="pièces auto, pièces moto, équipements de construction, Bs Investment, pièces détachées, mécanique, véhicules, engins, réparation, accessoires">

<!-- Auteur -->
<meta name="author" content="Jocelin Kisenga">

<!-- Réseaux sociaux: Open Graph pour Facebook -->
<meta property="og:title" content="Bs - Investment | Pièces Auto, Moto & Construction">
<meta property="og:description" content="Découvrez notre catalogue de pièces pour véhicules, motos et engins de chantier. Bs - Investment, votre partenaire mécanique.">
<meta property="og:image" content="{{asset()}}">
<meta property="og:url" content="https://www.bs-investment.com">
<meta property="og:type" content="website">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Bs - Investment | Pièces Auto, Moto & Construction">
<meta name="twitter:description" content="Pièces détachées pour véhicules, motos et engins de construction. Bs - Investment, la mécanique en confiance.">
<meta name="twitter:image" content="">

<!-- Favicon -->
<link rel="icon" href="favicon.ico" type="image/x-icon">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('Client/assets/css/new.css')}}">

  <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css " rel="stylesheet">
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="stylesheet" href="{{asset('Client/assets/css/style.css')}}">
  @yield('custom-style')
  @livewireStyles

</head>
<body class="w-full overflow-hidden overflow-y-auto">
@include("Client.navs.navbar")
@yield("content")




@include("Client.navs.footer")

@livewireScripts
@notifyJs
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('Client/assets/js/jquery.js')}}"></script>
<script  src="{{asset('Client/assets/js/app.js')}}"></script>
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
<script  src="{{asset('Client/assets/js/nav.js')}}"></script>

<script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script  src="{{asset('Client/assets/js/lightbox-plus-jquery.min.js')}}"></script>
@include('sweetalert::alert')


<script>
          window.addEventListener('swal',function(e){
            Swal.fire(e.detail);
        });

//   $('#search').focus(function(){

//     $('#crypto-modal').show().addClass('modal-open');
// });
// // search

// search main









$(document).ready(function(){
    var submitIcon = $('.searchbar-icon');
    var inputBox = $('.searchbar-input');
    var searchbar = $('.searchbar');
    var isOpen = false;
    submitIcon.click(function(){
        if(isOpen == false){
            searchbar.addClass('searchbar-open');
            inputBox.focus();
            isOpen = true;
        } else {
            searchbar.removeClass('searchbar-open');
            inputBox.focusout();
            isOpen = false;
        }
    });
     submitIcon.mouseup(function(){
            return false;
        });
    searchbar.mouseup(function(){
            return false;
        });
    $(document).mouseup(function(){
            if(isOpen == true){
                $('.searchbar-icon').css('display','block');
                submitIcon.click();
            }
        });
});
    function buttonUp(){
        var inputVal = $('.searchbar-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.searchbar-icon').css('display','none');
        } else {
            $('.searchbar-input').val('');
            $('.searchbar-icon').css('display','block');
        }
    }
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

