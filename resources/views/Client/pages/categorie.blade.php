@extends("Client.layouts.app")
@section('content')



    <section class="pt-14 w-full overflow-hidden">
        <div class="appContainer py-1">
            <div class="flex flex-col gap-6">
                <div class="flex">
                    <h3 class="text-2xl md:text-3xl font-semibold">Autres categories</h3>
                </div>
                <div class="grid grid-cols-2 xs:grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-2 sm:gap-3 md:gap-4 lg:gap-5">
                  @foreach ($categories as $item )
                  <a href="{{route('Client.categorie',['id'=>$item->id])}}"
                  class="col-span-1 bg-white shadow-gray-100 border border-dashed rounded-md shadow transition-all hover:shadow-lg p-4">
                  <div class="w-full flex flex-col gap-2">
                      <div class="flex justify-center">
                          <div class="flex bg-white shadow-lg p-3 rounded-full">
                              <img src="{{ asset('Client/assets/images/bar_icon_127276.png') }}" alt="{{$item->name}}"
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
                    <h2 class="text-2xl  md:text-3xl font-semibold text-gray-700"></h2>
                </div>
                <div class="grid xs:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 sm:gap-4 md:gap-6">

                  @foreach ($products as $item)
                  <div
                  class="col-span-1 flex flex-col  w-full border border-dashed shadow group-first: shadow-gray-100 rounded-md overflow-hidden">
                  <div class="flex w-full bg-gray-100">
                      <img src="{{ asset('storage/uploads/' .$item->image->first()["path"]) }}" width="40"
                          height="auto" alt="image produits" class="w-full h-28 sm:h-36 md:h-40 lg:h-44 rounded">
                  </div>
                  <div class="flex w-full flex-col px-2 pb-2 sm:px-4 sm:pb-4 pt-2 sm:gap-2">
                      <div class="w-full">

                          <a href="{{route('Client.productDetails',['id'=>$item->id])}}">
                              <h4
                                  class="uppercase font-medium text-xl text-gray-700 group-hover:text-pink-600 transition">
                                  {{$item->name}}...
                              </h4><span class=" color-orange font-bold">voir plus </span>
                          </a>
                      </div>
                      <div
                          class="flex w-full items-center flex-wrap gap-1 small:gap-0 small:flex-nowrap justify-between">
                          <h2 class="font-bold text-lg flex text-gray-600">{{$item->price}} <span
                                  class="pl-1 color-orange">$</span>
                          </h2>
                      </div>
                      <livewire:addtocart :product="$item->id">
                  </div>
              </div>
                  @endforeach



                </div>
            </div>
        </div>
    </section>






@endsection
