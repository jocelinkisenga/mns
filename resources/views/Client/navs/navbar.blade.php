@php
  use Darryldecode\Cart\Facades\CartFacade;
@endphp
<header class="relative z-[1000] w-full bg-white shadow-gray-200 shadow-md">
    <div class="appContainer flex items-center justify-between">
      <!-- logo -->
      <div class="w-full flex justify-between items-center border-b border-b-gray-200 py-3">
        <div class="flex items-center gap-4">
          <div class="md:hidden flex items-center">
            <button data-open-menu title="Menu Burger" id="openNav" class="flex border-r border-r-gray-200 text-gray-600 outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
              </svg>              
            </button>
          </div>
          <a href="/" class="flex">
            <img src="{{asset('Client/assets/images/MS Logo JPG.jpg')}}" alt="M&S" class="w-auto h-8 md:h-10">
          </a>
        </div>

        <form class="w-full md:max-w-md xl:max-w-xl lg:max-w-lg md:flex relative hidden">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 color-orange">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                clip-rule="evenodd" />
            </svg>
          </span>
          <input type="text" id="search" onfocus="toggleModal('crypto-modal')"
            class="pl-12 w-full border border-r-0 btn-border py-2.5 px-4 rounded-l-md outline-none"
            placeholder="Recyclette...">
          <button 
            class="color-orange border btn-border text-white px-6 font-medium rounded-r-md hover:bg-transparent hover:text-pink-600 transition">
            Recherche
          </button>
        </form>

        <div class="gap-4 flex items-center">
          <div class="flex md:hidden">
            <a  class="flex text-orange-200" type="button"  data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            {{-- <input type="text" class="search-click" name="" placeholder="search here..." />
            <i class="fa fa-envelope icon">
            </i> --}}

            <livewire:search>
          </div>
          @auth
            <livewire:card-counter>
          @endauth
          {{-- <div class="dropdown">
          <button type="button" onclick="myFunction()" class="flex flex-col items-center text-gray-700 hover:text-primary transition dropbtn" >
            <div class="color-orange">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <div class="text-xs leading-3 md:flex hidden">Compte</div>
          </button>
          <div id="myDropdown" class="dropdown-content">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
          </div>
        </div> --}}
        <div class="dropdown">
          <button ><i onclick="myFunction()" class="fa fa-user dropbtn flex flex-col items-center text-gray-700 hover:text-primary transition"></i></button>
          <div id="myDropdown" class="dropdown-content">
            @auth
            <a href="{{route('profile')}}">Profil</a>
            <a href="{{route('edit-profile')}}">Editer le profile</a>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <input type="submit" value="se deconnecter" class="rounded min-w-max md:w-max w-full font-bold flex justify-center  btn-background py-2 text-base transition duration-300 hover:bg-pink-100 px-8 md:px-6 md:py-6 text-white">
            </form>
            @endauth
            @guest
            <a href="{{route('login')}}">se connecter</a>
            <a href="{{route('register')}}">créer un compte</a>
            @endguest

          </div>
        </div>
        

        </div>
      </div>

    </div>
    <div data-nav-bar class="appContainer z-[700] -translate-x-full md:-translate-x-0 flex flex-col py-0 p-0 px-0 justify-start md:justify-start  fixed top-0 md:h-max h-screen left-0 md:relative md:left-0 w-full transition-all duration-300 ease-out">
      <div data-nav-overlay class="fixed z-[600] inset-0 invisible opacity-0 transition-all duration-300 md:hidden md:invisible"></div>
      <nav
        class="absolute top-0 left-0 md:relative h-full md:bg-transparent 
        bg-white z-[1200] w-full 
        flex flex-col md:flex-row max-w-sm md:overflow-hidden
         md:overflow-x-auto justify-between pb-4 md:pb-0 px-6 md:px-0
          md:gap-8 md:h-auto
          md:w-full md:max-w-none">
        <div class="flex md:hidden min-h-max items-end justify-end px-2 py-2">
          <button data-close-nav class="md:hidden min-h-max bg-white shadow p-3 rounded">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            
          </button>
        </div>
        <ul
          class="flex flex-col md:flex-row md:items-center gap-3 py-2 min-w-max md:h-max h-full overflow-hidden overflow-y-auto md:overflow-y-hidden">
          <li class="w-full flex">
            <a href="/"
              class="transition-all min-w-max duration-300 relative before:absolute before:bottom-0 before:origin-right hover:before:origin-right origin-left before:bg-pink-600 before:h-0.5 before:transition-all before:w-full before:scale-x-0 hover:before:scale-x-100 py-2  text-gray-600 2xl:text-xl hover:text-pink-600">Accueil</a>
          </li>
          <li class="w-full flex">
            <a href="{{route('about')}}"
              class="transition-all min-w-max duration-300 relative before:absolute before:bottom-0 before:origin-right hover:before:origin-right origin-left before:bg-pink-600 before:h-0.5 before:transition-all before:w-full before:scale-x-0 hover:before:scale-x-100 py-2  text-gray-600 2xl:text-xl hover:text-pink-600">A
              propos</a>
          </li>
          <li class="w-full flex">
            <a href="{{route('client-products')}}"
              class="ttransition-all min-w-max duration-300 text-base font-medium relative before:absolute before:bottom-0 before:origin-right hover:before:origin-right origin-left before:bg-pink-600 before:h-0.5 before:transition-all before:w-full before:scale-x-0 hover:before:scale-x-100 py-2  text-gray-600 2xl:text-xl hover:text-pink-600">Notre Magasin</a>
          </li>
          <li class="w-full flex">
          @auth
          @if (Auth::user()->role == 1)
          <div class="flex items-center py-2 min-h-max md:w-max w-full">
            <a href="{{route('admin.dashboard')}}" 
              class="rounded min-w-max md:w-max w-full flex justify-center  color-orange  py-2 text-base transition duration-300 hover:bg-pink-700 px-4 md:px-6 md:py-3 text-white">
              dashboard</a>
          </div>
          @endif
          @endauth
          </li>
        </ul>
      

 
        <div class="flex items-center py-2  min-h-max md:w-max w-full">

          <a href="{{route('contact')}}"
            class="rounded min-w-max md:w-max w-full font-bold flex justify-center btn-background py-2 text-base transition duration-300 hover:bg-pink-100 px-4 md:px-6 md:py-3 text-white ml-2">Nous
            contacter</a>
        </div>

      </nav>
    </div>

  </header>