<div>
    {{-- <a href="{{route('client-cart')}}" title="Panier"
    class="flex flex-col items-center  text-gray-700 hover:text-primary transition relative">
    <span
      class="absolute -right-0 -top-0 w-3 h-3 rounded-full flex items-center text-white justify-center bg-pink-600">@if($items_counter > 0)
      {{$items_counter}}
      @endif</span>
    <div class="text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path
          d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
      </svg>
    </div>
    <div class="text-xs leading-3 md:flex hidden">Panier</div>
  </a> --}}
  <a
  href="{{route('client-cart')}}"
  title="Panier"
  class="relative flex flex-col items-center text-gray-700 transition hover:text-primary"
> 
  <span
    class="absolute -right-0 -top-0 flex h-2 w-2 items-center justify-center rounded-full bg-primary"
  > @if($items_counter > 0)
  {{$items_counter}}
  @endif</span>
  <div class="text-gray-600">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
      fill="currentColor"
      class="h-6 w-6"
    >
      <path
        d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
      />
    </svg>
  </div>
  <div class="hidden text-xs leading-3 md:flex">Panier</div>
</a>
</div>
