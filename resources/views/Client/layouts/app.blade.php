<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>M&S</title>
  <link rel="stylesheet" href="{{asset('client/assets/css/app.css')}}">
  @livewireStyles

</head>
<body class="w-full overflow-hidden overflow-y-auto">

@include("client.navs.navbar")
@yield("content")
@include("client.navs.footer")

@livewireScripts
<script  src="{{asset('client/assets/js/app.js')}}"></script>
@include('sweetalert::alert')
</body>

</html>

