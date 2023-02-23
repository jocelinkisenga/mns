@extends("Client.layouts.app")
@section("content")
<div class="w-full overflow-hidden">
    <div class="appContainer">
      <div class="w-full grid lg:grid-cols-4 gap-6 pt-4 pb-16 items-start relative">
        <!-- sidebar -->
        <div data-filter-box
          class="col-span-1 bg-white px-4 pt-4 pb-6 
          shadow rounded-md overflow-hidden absolute 
          lg:static left-4 top-16 z-10 w-72 lg:opacity-100 
          opacity-0 lg:visible invisible lg:scale-y-100 scale-y-0 
          transition-all duration-500 ease-in-out origin-top
          lg:w-full lg:block">
          <div class="divide-gray-200 divide-y space-y-5 relative">
            <!-- category filter -->
            <div class="relative">
              <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
              <div class="space-y-2">

                @foreach ($categories as $item )
                                  <!-- single category -->
                <div class="flex items-center">
                  <input type="checkbox" id="Bedroom" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                  <label for="Bedroom" class="text-gray-600 ml-3 cursor-pointer">{{$item->name}}</label>
                  <div class="ml-auto text-gray-600 text-sm">({{$item->products->count()}})</div>
                </div>
                <!-- single category end -->
                @endforeach

              </div>
            </div>

            <div class="pt-4">
              <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Prix</h3>
              <div class="mt-4 flex items-center">
                <input type="text"
                  class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                  placeholder="min">
                <span class="mx-3 text-gray-500">-</span>
                <input type="text"
                  class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                  placeholder="mix">
              </div>
            </div>

            <div class="flex pt-4">
              <button class="btn-background border btn-border
              text-white px-6 py-2 rounded-md z-50
            hover:bg-opacity-80 transition w-full flex justify-center text-center">Filtrer</button>
            </div>
          </div>
        </div>

        <div class="col-span-3">

          <div class="mb-4 flex gap-4 items-center">
            
            <select
              class="w-44 text-sm text-gray-600 px-4 py-3 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
              <option>Default sorting</option>
              <option>Price low-high</option>
              <option>Price high-low</option>
              <option>Latest product</option>
            </select>

            <div class="lg:hidden flex items-center">
              <button data-toggle-filter class="outline-none p-3 rounded shadow bg-white text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path d="M6 12a.75.75 0 01-.75-.75v-7.5a.75.75 0 111.5 0v7.5A.75.75 0 016 12zM18 12a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5A.75.75 0 0118 12zM6.75 20.25v-1.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0zM18.75 18.75v1.5a.75.75 0 01-1.5 0v-1.5a.75.75 0 011.5 0zM12.75 5.25v-1.5a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0zM12 21a.75.75 0 01-.75-.75v-7.5a.75.75 0 011.5 0v7.5A.75.75 0 0112 21zM3.75 15a2.25 2.25 0 104.5 0 2.25 2.25 0 00-4.5 0zM12 11.25a2.25 2.25 0 110-4.5 2.25 2.25 0 010 4.5zM15.75 15a2.25 2.25 0 104.5 0 2.25 2.25 0 00-4.5 0z" />
                </svg>                
              </button>
            </div>

          </div>
          <!-- sorting end -->
          <!-- product wrapper -->
          <div class="grid xs:grid-cols-2  lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-6">

            @foreach ($products as $item)
            <div
            class="col-span-1 flex flex-col  w-full border border-dashed shadow group-first: shadow-gray-100 rounded-md overflow-hidden">
            <div class="flex w-full bg-gray-100">
              <img src="{{ asset('storage/uploads/' . $item->image->first()["path"]) }}" width="40" height="auto" alt="image produits"
                class="w-full h-28 sm:h-36 md:h-40 lg:h-44 rounded">
            </div>
            <div class="flex w-full flex-col px-2 pb-2 sm:px-4 sm:pb-4 pt-2 sm:gap-2">
              <div class="w-full">

                <a href="{{route('client.productDetails',['id'=>$item->id])}}">
                  <h4 class="uppercase font-medium text-sm text-gray-700 group-hover:text-pink-600 transition">
                    {{substr($item->name,0,15)}} ...
                  </h4><span class="color-orange font-bold">voir plus</span>
                </a>
              </div>
              <div class="flex w-full items-center flex-wrap gap-1 small:gap-0 small:flex-nowrap justify-between">
                <h2 class="font-bold text-lg flex text-gray-600">{{$item->price}} <span class="pl-1 color-orange">$</span>
                </h2>
              </div>
              <livewire:addtocart :product="$item->id">
              {{-- <form class="flex w-full">
                <input type="hidden" name="producId" value="id">
                <button class="border-pink-600 py-2.5 border
                bg-pink-600
                  hover:border-pink-600 text-white
                 hover:text-pink-600 transition
                 hover:bg-white
                 focus:bg-white text-sm font-light px-5 rounded w-full
                  flex items-center justify-center gap-3">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                  </span>
                  <span>
                    Ajouter
                  </span>
                </button>
              </form> --}}
            </div>
          </div>

            @endforeach

          </div>
          <!-- product wrapper end -->
        </div>
        <!-- products end -->
      </div>
      <!-- shop wrapper end -->
    </div>
  </div>
@endsection