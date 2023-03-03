<div>
    {{-- <form action="" class="search-bar-container">
        <input type="search" id="search-bar"  placeholder="recherche..." >
        {{-- <label for="search-bar" class="fas fa-search "></label> --}
    </form>
    <div class="toggle-search">
onkeyup="buttonUp();"
    </div>
    <ul>
        @if (!empty($records))
        @foreach ($records as $item)
        <li>{{$item->name}}</li>
        @endforeach
         
        @endif
    </ul> --}}
    {{-- <div class="container" wire:ignore.self>
        <form class="searchbar" wire:ignore.self>
            {{-- <input type="search" placeholder="Search here" wire:model.debounce.1000ms="search_text" class="searchbar-input" wire:keyup="search()"  required>
            <input type="submit" class="searchbar-submit" value="GO"> --
            <span class="searchbar-icon hidden-sm hidden-md"><i class="fa fa-search" aria-hidden="true" data-toggle="modal" data-target="#modalSearch" ></i></span>
        </form>
    </div> --}}
    {{-- <ul >
        @if (!empty($records))
        @foreach ($records as $item)
        <li style="  z-index: 999; margin-top:90px">{{$item->name}}</li>
        @endforeach
         
        @endif
    </ul> --}}


    {{-- modal --}}
    

<!-- Search Modal -->
<!-- Modal -->


{{-- <button type="button" data-modal-target="crypto-modal" data-modal-toggle="crypto-modal" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
    <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
    Connect wallet
  </button> --}}
  
  <!-- Main modal -->
  <div id="crypto-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full" wire:ignore.self>
      <div class="relative w-full h-full max-w-md md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="crypto-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                  <span class="sr-only">Close modal</span>
              </button>
              <!-- Modal header -->
              <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                      rechercher un produit
                  </h3>
              </div>
              <!-- Modal body -->
              <div class="p-6">
                  <p class="text-sm font-normal text-gray-500 dark:text-gray-400">

                    <form>   
                        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                {{-- <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                           --}} </div> 
                            <input type="search" wire:model.debounce.1000ms="search_text" id="search" wire:keyup="search()" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                            {{-- <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                       --}} </div> 
                    </form>
                  </p>
                  <ul class="my-4 space-y-3">
                    @if (!empty($records))
                    @foreach ($records as $item)
                    <li>
                        <a href="{{route('client.productDetails',['id'=> $item->id])}}" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <img src="{{ asset('storage/uploads/' . $item->image->first()["path"]) }}" class="h-4" alt="" srcset="">
                            <span class="flex-1 ml-3 whitespace-nowrap">{{$item->name}}</span>
                            <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">voir le détail</span>
                        </a>
                    </li>
                    @endforeach
                    @endif

                  </ul>
                  <div>
                      <a href="#" class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                          <svg aria-hidden="true" class="w-3 h-3 mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"></path></svg>
                          search form by link-Dcs</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  

</div>
