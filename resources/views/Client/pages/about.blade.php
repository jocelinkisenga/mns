@extends("Client.layouts.app")
@section("content")
<section class="w-full relative overflow-hidden min-h-max pt-8">

    <div class="appContainer">
      <div
        class="w-full rounded-md py-4 md:py-8 p-4 md:p-6 lg:p-8 md:pt-0 pt-20 flex items-end md:items-center h-full relative">
        <div class="absolute inset-0 z-0">
          <img src="{{asset('Client/assets/images/disinfecting-in-home.jpg')}}" alt="banner product" width="500" height="auto"
            class="w-full h-full z-0 rounded-3xl object-cover">
        </div>

        <div
          class="md:w-2/3 lg:w-1/2 z-20 relative bg-gray-200 bg-opacity-70 backdrop-filter backdrop-blur p-5 rounded-2xl">
          <div class="flex flex-col gap-7 z-20 relative">
            <div class="w-full flex flex-col gap-6">
              <h1 class="text-2xl sm:text-3xl md:text-4xl z-20 lg:text-5xl font-semibold text-gray-700">Trouvez les
                instruments pour vos menages rapidement</h1>
              <p class="flex text-sm md:text-base z-10 text-gray-600 line-clamp-3">
              Trouvez le meilleur des home gadgets à petits !

          Nous allions qualité, efficacité et accessibilité.
          Pour nos mamans, nos boss ladies et tous les membres de la famille, les tâches domestiques ne sont plus une corvée.

          Find the best home gadgets at a low price. 

          We combine quality, efficiency and accessibility.
          For our moms, boss ladies and all family members, household chores are no longer a chore.
              </p>
            </div>
            <div class="flex">
              <a href="{{route('client-products')}}" class="btn-background btn-border border  font-bold
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
          <img src="{{asset('Client/assets/images/young-wife.jpg')}}" width="300" alt="image Serpi"
            class="w-full h-80 object-cover rounded-md md:h-full">
        </div>
        <div class="flex flex-col gap-6 md:gap-8 md:py-12">
          <div class="flex flex-col gap-5">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-gray-700">A propos de
              nous</h2>
            <p class="text-sm md:text-base">
            "Bienvenue chez M AND S  Gadjet! Nous sommes le leader sur le marché de l'équipement de maintenance pour la maison. Nous offrons une large gamme de produits de haute qualité pour vous aider à entretenir et à améliorer votre maison.

          Que vous soyez un bricoleur amateur ou un professionnel expérimenté, nous avons ce qu'il vous faut. Nos produits incluent des outils électriques, des équipements de plomberie, des équipements de jardinage et bien plus encore. Tous nos produits sont conçus pour durer et sont fabriqués par les marques les plus fiables sur le marché

          <p>Chez Home Maintenance Equipment, nous savons que l'achat d'équipements de maintenance peut parfois être déroutant. C'est pourquoi nos experts en service à la clientèle sont là pour vous aider à trouver les produits qui répondent à vos besoins spécifiques. Nous nous engageons à vous fournir un service à la clientèle exceptionnel et à vous assister à tout moment.

           sommes fiers de proposer des prix compétitifs sur tous nos produits, et nous offrons également des offres spéciales régulières pour que vous puissiez économiser encore plus. Nous offrons également une garantie de satisfaction à 100% pour vous donner la tranquillité d'esprit que vous méritez.</p>

         
            </p>
            <div class="flex flex-col gap-6">
              <div class="flex max-w-sm w-full gap-6">
                <div class="max-w-[2rem] sm:max-w-[3rem] w-full  
                h-[2rem] sm:h-[3rem] flex items-center justify-center 
                overflow-hidden bg-pink-600 bg-opacity-5 color-orange rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                      d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                    </path>
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="font-bold text-gray-500 text-xl mb-1">Numero telephone</h4>
                  <p class="text-base text-gray-500">
                    (+243)
                  </p>
                </div>
              </div>

              <div class="flex max-w-sm w-full gap-6">
                <div class="max-w-[2rem] sm:max-w-[3rem] w-full  
                h-[2rem] sm:h-[3rem] flex items-center justify-center 
                overflow-hidden bg-pink-600 bg-opacity-5 color-orange rounded ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z"
                      clip-rule="evenodd"></path>
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="font-bold text-gray-500 text-xl mb-1">
                    Adresse mail
                  </h4>
                  <p class="text-base text-gray-500">
                    info@ms-homegadget.com
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex">
            <a href="contact-us.html"
              class="px-6 py-3 btn-background text-white transition hover:bg-pink-600 rounded-md">Prendre contact</a>
          </div>
        </div>
      </div>
    </div>
  </section>


{{-- about us --}}
@include("Client.components.about")
{{-- end about us --}}

{{-- best choice --}}
@include("Client.components.choice")
{{-- end best choice --}}
@endsection