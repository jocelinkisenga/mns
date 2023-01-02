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
            <img src="{{asset('client/assets/images/MS Logo JPG.jpg')}}" alt="M&S" class="w-auto h-8 md:h-10">
          </a>
        </div>

        <form class="w-full md:max-w-md xl:max-w-xl lg:max-w-lg md:flex relative hidden">
          <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path fill-rule="evenodd"
                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                clip-rule="evenodd" />
            </svg>
          </span>
          <input type="text"
            class="pl-12 w-full border border-r-0 border-gray-200 py-2.5 px-4 rounded-l-md focus:border-pink-600 outline-none"
            placeholder="Recyclette...">
          <button type="submit"
            class="bg-pink-600 border border-pink-600 text-white px-6 font-medium rounded-r-md hover:bg-transparent hover:text-pink-600 transition">
            Recherche
          </button>
        </form>

        <div class="gap-4 flex items-center">
          <div class="flex md:hidden">
            <a href="{{route('client-products')}}" class="flex text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          </div>
          @if (session()->has("basket"))
          <a href="{{route('client-cart')}}" title="Panier"
            class="flex flex-col items-center  text-gray-700 hover:text-primary transition relative">
            <span
              class="absolute -right-0 -top-0 w-3 h-3 rounded-full flex items-center text-white justify-center bg-pink-600">{{sizeof(session('basket'))}}</span>
            <div class="text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path
                  d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
              </svg>
            </div>
            <div class="text-xs leading-3 md:flex hidden">Panier</div>
          </a>
          @endif
          <a href="#" class="flex flex-col items-center text-gray-700 hover:text-primary transition">
            <div class="text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <div class="text-xs leading-3 md:flex hidden">Compte</div>
          </a>
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
              class="ttransition-all min-w-max duration-300 text-base font-medium relative before:absolute before:bottom-0 before:origin-right hover:before:origin-right origin-left before:bg-pink-600 before:h-0.5 before:transition-all before:w-full before:scale-x-0 hover:before:scale-x-100 py-2  text-gray-600 2xl:text-xl hover:text-pink-600">Nos
              produits</a>
          </li>
        </ul>
        <div class="flex items-center py-2 min-h-max md:w-max w-full">
          <a href="{{route('contact')}}"
            class="rounded min-w-max md:w-max w-full flex justify-center bg-pink-600 py-2 text-base transition duration-300 hover:bg-pink-700 px-4 md:px-6 md:py-3 text-white">Nous
            contacter</a>
        </div>
      </nav>
    </div>
  </header>