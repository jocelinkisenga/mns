@extends("layouts.app")
@section("content")
<section class="w-full relative overflow-hidden min-h-max pt-8">

    <div class="appContainer">
      <div
        class="w-full rounded-md py-4 md:py-8 p-4 md:p-6 lg:p-8 md:pt-0 pt-20 flex items-end md:items-center h-full relative">
        <div class="absolute inset-0 z-0">
          <img src="assets/images/disinfecting-in-home.jpg" alt="banner product" width="500" height="auto"
            class="w-full h-full z-0 rounded-3xl object-cover">
        </div>

        <div
          class="md:w-2/3 lg:w-1/2 z-20 relative bg-gray-200 bg-opacity-70 backdrop-filter backdrop-blur p-5 rounded-2xl">
          <div class="flex flex-col gap-7 z-20 relative">
            <div class="w-full flex flex-col gap-6">
              <h1 class="text-2xl sm:text-3xl md:text-4xl z-20 lg:text-5xl font-semibold text-gray-700">Trouvez les
                instruments pour vos menages rapidement</h1>
              <p class="flex text-sm md:text-base z-10 text-gray-600 line-clamp-3">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla accusantium dolor ratione hic cum ipsam
                ullam at! Praesentium excepturi repellat quam non animi sunt magni, consequuntur dolorem quos illum
                modi?
              </p>
            </div>
            <div class="flex">
              <a href="shop.html" class="bg-pink-600 border border-pink-600
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




  <section class="w-full overflow-hidden pt-14 pb-6">
    <div class="appContainer flex flex-col">
      <div class="grid items-center md:grid-cols-2 gap-6 lg:gap-10">
        <div class="col-span-1 flex h-full">
          <img src="./assets/images/young-wife.jpg" width="300" alt="image Serpi"
            class="w-full h-80 object-cover rounded-md md:h-full">
        </div>
        <div class="flex flex-col gap-6 md:gap-8 md:py-12">
          <div class="flex flex-col gap-5">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-700">A propos de
              nous</h2>
            <p class="text-sm md:text-base">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur in nesciunt quis sunt
              fuga dolorum? Maiores non animi impedit dignissimos ullam? Reprehenderit sint vel modi.
              Alias sapiente veritatis cum at?
            </p>
            <div class="flex flex-col gap-6">
              <div class="flex max-w-sm w-full gap-6">
                <div class="max-w-[2rem] sm:max-w-[3rem] w-full  
                h-[2rem] sm:h-[3rem] flex items-center justify-center 
                overflow-hidden bg-pink-600 bg-opacity-5 text-pink-600 rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                      d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                    </path>
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="font-bold text-gray-600 text-xl mb-1">Numero telephone</h4>
                  <p class="text-base text-gray-500">
                    (+243)
                  </p>
                </div>
              </div>

              <div class="flex max-w-sm w-full gap-6">
                <div class="max-w-[2rem] sm:max-w-[3rem] w-full  
                h-[2rem] sm:h-[3rem] flex items-center justify-center 
                overflow-hidden bg-pink-600 bg-opacity-5 text-pink-600 rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="font-bold text-gray-600 text-xl mb-1">
                    Adresse mail
                  </h4>
                  <p class="text-base text-gray-500">-</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex">
            <a href="contact-us.html"
              class="px-6 py-3 bg-pink-600 text-white transition hover:bg-pink-600 rounded-md">Prendre contact</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="w-full overflow-hidden pt-14 pb-6">
    <div class="appContainer flex flex-col">
      <div>
        <div class="flex flex-col gap-y-5">
          <div class="flex">
            <h1 class="text-2xl  md:text-3xl font-semibold text-gray-700">Pourquoi nous choisir</h1>
          </div>
          <div class="grid md:grid-cols-3 gap-4">
            <div
              class="col-span-1 flex flex-col md:flex-row border-pink-600 border rounded-md px-5 lg:px-2 lg:py-4 py-3 justify-center gap-2">
              <div class=" min-w-[3.5rem] text-pink-600 flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 h-10 md:h-14 md:w-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                </svg>

              </div>
              <div class="flex flex-col gap-y-2">
                <h1 class="text-pink-600 text-lg md:text-xl">Nous vous facilitons la tache</h1>
                <p class="text-sm text-gray-600">Les produits M&S sont dirigés par l’idée de rendre la vie
                  plus facile à la maison, que ce soit pour le rangement et nettoyage</p>
              </div>
            </div>

            <div
              class="col-span-1 flex flex-col md:flex-row border-pink-600 border rounded-md px-5 lg:px-2 lg:py-4 py-3 justify-center gap-2">
              <div class=" min-w-[3.5rem] text-pink-600 flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 h-10 md:h-14 md:w-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>

              </div>
              <div class="flex flex-col gap-y-2">
                <h1 class="text-pink-600 text-lg md:text-xl">Nous repondons à vos besoins.</h1>
                <p class="text-sm text-gray-600">Nous apportons nos produits en fonction des besoins de la
                  maison et les difficultés actuelles dans notre ville.</p>
              </div>
            </div>

            <div
              class="col-span-1 flex flex-col md:flex-row border-pink-600 border rounded-md px-5 lg:px-2 lg:py-4 py-3 justify-center gap-2">
              <div class=" min-w-[3.5rem] text-pink-600 flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 h-10 md:h-14 md:w-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                </svg>

              </div>
              <div class="flex flex-col gap-y-2">
                <h1 class="text-pink-600 text-lg md:text-xl">Meilleur prix du marché</h1>
                <p class="text-sm text-gray-600">Vous trouvez le meilleur des home gadgets à prix abordable
                  (tout ou presque à 5$ chez nous)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w-full overflow-hidden pt-8">
    <div class="appContainer">
      <div class="grid bg-gradient-to-tl from-gray-50 to-gray-300 md:grid-cols-3 gap-6 items-center relative rounded-xl overflow-hidden">
        <div class="absolute rounded-3xl -skew-y-12 top-0 right-0 md:right-[calc(50%-200px)] w-20 h-20 bg-gradient-to-br from-pink-400 to-gray-400 opacity-25"></div>
        <div class="absolute rounded-3xl -skew-y-12 bottom-0 w-20 h-20 bg-gradient-to-br from-pink-400 to-gray-400 opacity-25"></div>
        <div class="relative flex md:col-span-2 flex-col gap-5 p-6 sm:p-10 z-10">
          <h1 class="text-gray-700 font-semibold text-3xl sm:text-4xl lg:text-5xl tracking-tight ">
            Les meilleurs produits pour vos menages
          </h1>
          <p class="text-gray-600">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, est libero! Ratione accusamus repellendus placeat tempora blanditiis tenetur dignissimos nostrum, assumenda expedita obcaecati, dicta sint accusantium aspernatur reprehenderit laboriosam. Dolore?
          </p>
          <div class="flex">
            <a href="shop.html" class="bg-pink-600 border border-pink-600
                 text-white px-8 py-3 rounded-md z-50
               hover:bg-opacity-80 transition">
              Acheter maintenant
            </a>
          </div>
        </div>
        <div class="hidden md:flex col-span-1 h-full relative overflow-hidden">
          <div class="w-full">
            <img src="./assets/images/disinfecting-in-home.jpg" alt="image product" width="300" height="auto"
              class="w-full h-full object-cover absolute rounded-l-[10rem]">
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection