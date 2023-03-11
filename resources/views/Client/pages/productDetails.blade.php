@extends("Client.layouts.app")

@section("content")

<section class="w-full overflow-hidden">
    <div class="appContainer">
      <div class="pt-4 pb-6 grid lg:grid-cols-2 gap-6">
        <div class="w-full max-w-full overflow-hidden">
          <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff; " class="swiper mySwiper2 flex w-full">
            <div class="swiper-wrapper w-full">
              @foreach ($product->image  as $key => $image)
              <div class="swiper-slide overflow-hide h-moyen " style="">
                <img src="{{ asset('storage/uploads/' . $image->path) }}" alt="product name" width="200" height="auto"
                  class="w-full h-40 sm:h-48  h-48 md:h-80 lg:h-80 object-cover rounded-md" />
              </div>
              @endforeach
              {{-- <div class="swiper-slide">
                <img src="assets/images/products/splendide-12.jpg" alt="product name" width="200" height="auto"
                  class="w-full h-40 sm:h-48 md:h-64 lg:h-56 object-cover rounded-md" />
              </div> --}}
            </div>
            <div class="swiper-button-next color-orange"></div>
            <div class="swiper-button-prev color-orange"></div>
          </div>
          <div thumbsSlider="" class="swiper mySwiper pt-8 w-full">
            <div class="swiper-wrapper pt-2">
              @foreach ($product->image  as $key => $image)
              <div class="swiper-slide h-24 rounded-md">
                <img src="{{ asset('storage/uploads/' . $image->path) }}" alt="product name" width="200" height="auto"
                  class="w-full h-14 md:h-16 rounded-md object-cover" />
              </div>
              @endforeach


            </div>
          </div>
        </div>
        <div>
          <h2 class="md:text-3xl text-2xl font-medium uppercase mb-2">{{$product->name}}</h2>

          <div class="space-y-2">
            @if ($product->old_quantity > 0)
            <p class="text-gray-800 font-semibold space-x-2">
              <span>Disponibilite: </span>
              <span class=" color-orange  p-1 px-2 rounded-full text-sm font-bold">disponible</span>
            @else
             <p class="text-gray-800 font-semibold space-x-2">
              <span>Disponibilite: </span>
              <span class=" color-orange p-1 px-2 rounded-full text-sm font-bold">Bientot disponible</span>
            </p>
            @endif
            <p class="space-x-2">
              <span class="text-gray-800 font-semibold">Categorie: </span>
              <span class="text-gray-600">{{$product->categorie->name}}</span>
            </p>
          </div>
          <div class="mt-4 flex items-baseline gap-3">
            <span class="text-primary font-semibold text-xl">${{$product->price}}.00</span>
            {{-- <span class="text-gray-500 text-base line-through">$500.00</span> --}}
          </div>

          <!-- quantity -->
          {{-- <div class="mt-4">
            <h3 class="text-base text-gray-800 mb-1">Quantite</h3>
            <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
              <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
              <div class="h-8 w-10 flex items-center justify-center">4</div>
              <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
            </div>
          </div> --}}
          <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6 w-full">
            {{-- <button class="border-pink-600 py-2.5 border
                 btn-background btn-border
                    hover:border-pink-600 text-white
                   hover:text-pink-600 transition
                   hover:bg-white
                   focus:bg-white text-sm font-light px-5 rounded
                    flex items-center gap-3">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path
                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg>
              </span>
              <span>
                Ajouter
              </span>
            </button> --}}
            <livewire:addtocart :product="$product->id">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w-fill overflow-hidden">
    <div class="appContainer pb-16">
      <!-- detail buttons -->
      <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">
        Details du produit
      </h3>
      <!-- details button end -->

      <!-- details content -->
      <div class="lg:w-4/5 xl:w-3/5 pt-6">
        <div class="space-y-3 text-gray-600">
          <p>
       {{$product->description}}.
          </p>
        </div>
        <!-- details table -->
        <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
          <tr>
            <th class="py-2 px-4 border border-gray-300 w-40 font-medium">couleurs</th>
            <td class="py-2 px-4 border border-gray-300">{{$product->colors}}</td>
          </tr>

        </table>
      </div>
    </div>
  </section>

@endsection
