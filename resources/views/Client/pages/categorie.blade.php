@extends("Client.layouts.app")
@section('content')
    <section class="w-full relative overflow-hidden">
        <div class="bg-cover bg-no-repeat bg-center py-28 relative">
            <div class="absolute z-0 inset-0">
                <div class="absolute inset-0 z-0 bg-gradient-to-br to-gray-300"></div>
                <img src="{{ asset('client/assets/images/young-wife.jpg') }}" alt="Jeune femme au foyer porte des gants"
                    class="w-full h-full object-cover">
            </div>
            <div class="appContainer">
                <div class="grid md:grid-cols-3 lg:grid-cols-2">
                    <div class="flex flex-col gap-6 md:col-span-2 lg:col-span-1 z-30">
                        <div class="flex flex-col gap-4">
                            <h1 class="xl:text-6xl md:text-5xl text-4xl text-gray-700 font-semibold z-50">
                                Trouvez les instruments pour vos <span class="text-pink-600">menages
                                    rapidement</span>
                            </h1>
                            <p class="text-base text-gray-600 leading-6 z-50">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa
                                assumenda aliquid inventore nihil laboriosam odio
                            </p>
                        </div>
                        <div class="flex pt-8 z-30">
                            <a href="shop.html"
                                class="bg-pink-600 border border-pink-600
                   text-white px-8 py-3 rounded-md z-50
                 hover:bg-opacity-80 transition">
                                Acheter maintenant
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-14 w-full overflow-hidden">
        <div class="appContainer py-1">
            <div class="flex flex-col gap-6">
                <div class="flex">
                    <h2 class="text-2xl md:text-3xl font-semibold">Nos categories</h2>
                </div>
                <div class="grid grid-cols-2 xs:grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 lg:gap-5">
                  @foreach ($categories as $item )
                  <a href=""
                  class="col-span-1 bg-white shadow-gray-100 border border-dashed rounded-md shadow transition-all hover:shadow-lg p-4">
                  <div class="w-full flex flex-col gap-2">
                      <div class="flex justify-center">
                          <div class="flex bg-white shadow-lg p-3 rounded-full">
                              <img src="{{ asset('client/assets/images/bar_icon_127276.png') }}" alt="{{$item->name}}"
                                  width="30" class="w-7 h-7 sm:w-10 sm:h-10 md:w-12 md:h-12">
                          </div>
                      </div>
                      <div class="flex justify-center">
                          <h3 class="text-center text-sm sm:text-base md:text-lg">{{$item->name}}</h3>
                      </div>
                  </div>
              </a>
                  @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="pt-14 w-full overflow-hidden">
        <div class="appContainer py-1">
            <div class="flex flex-col gap-6">
                <div class="flex">
                    <h2 class="text-2xl  md:text-3xl font-semibold text-gray-700">Nos produits</h2>
                </div>
                <div class="grid xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 sm:gap-4 md:gap-6">

                  @foreach ($products as $item)
                  <div
                  class="col-span-1 flex flex-col  w-full border border-dashed shadow group-first: shadow-gray-100 rounded-md overflow-hidden">
                  <div class="flex w-full bg-gray-100">
                      <img src="{{ asset('storage/uploads/' . $item->image->path) }}" width="40"
                          height="auto" alt="image produits" class="w-full h-28 sm:h-36 md:h-40 lg:h-44 rounded">
                  </div>
                  <div class="flex w-full flex-col px-2 pb-2 sm:px-4 sm:pb-4 pt-2 sm:gap-2">
                      <div class="w-full">

                          <a href="detailproduit.html">
                              <h4
                                  class="uppercase font-medium text-xl text-gray-700 group-hover:text-pink-600 transition">
                                  {{$item->name}}...
                              </h4>
                          </a>
                      </div>
                      <div
                          class="flex w-full items-center flex-wrap gap-1 small:gap-0 small:flex-nowrap justify-between">
                          <h2 class="font-bold text-lg flex text-gray-600">{{$item->price}} <span
                                  class="pl-1 text-pink-500">CDF</span>
                          </h2>
                      </div>
                      <form class="flex w-full">
                          <input type="hidden" name="producId" value="id">
                          <button
                              class="border-pink-600 py-2.5 border
            bg-pink-600
              hover:border-pink-600 text-white
             hover:text-pink-600 transition
             hover:bg-white
             focus:bg-white text-sm font-light px-5 rounded w-full
              flex items-center justify-center gap-3">
                              <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path
                                          d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                  </svg>
                              </span>
                              <span>
                                  Ajouter
                              </span>
                          </button>
                      </form>
                  </div>
              </div>
                  @endforeach



                </div>
            </div>
        </div>
    </section>






@endsection
