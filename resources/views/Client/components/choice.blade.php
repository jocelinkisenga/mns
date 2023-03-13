<section class="w-full overflow-hidden pt-8">
    <div class="appContainer">
        <div
            class="grid bg-gradient-to-tl from-gray-50 to-gray-300 md:grid-cols-3 gap-6 items-center relative rounded-xl overflow-hidden">
            <div
                class="absolute rounded-3xl -skew-y-12 top-0 right-0 md:right-[calc(50%-200px)] w-20 h-20 bg-gradient-to-br from-pink-400 to-gray-400 opacity-25">
            </div>
            <div
                class="absolute rounded-3xl -skew-y-12 bottom-0 w-20 h-20 bg-gradient-to-br from-pink-400 to-gray-400 opacity-25">
            </div>
            <div class="relative flex md:col-span-2 flex-col gap-5 p-6 sm:p-10 z-10">
                <h1 class="text-gray-700 font-semibold text-3xl sm:text-4xl lg:text-5xl tracking-tight ">
                    Les meilleurs produits pour vos menages
                </h1>
                <p class="text-gray-600">
                Rejoignez notre quête pour un ménage et une organisation aisés à la maison. Nous présentons une vaste sélection d'articles novateurs et économisant du temps pour fluidifier votre routine. Que vous soyez un parent occupé ou souhaitant optimiser les tâches domestiques, nous avons la réponse à vos besoins. Des solutions sûres pour les enfants aux outils d'organisation élégants pour la maison, nous avons tout ce qu'il vous faut. Parcourez notre collection soigneusement choisie de produits conçus pour vous offrir un gain de temps, une réduction d'efforts et pour sublimer votre foyer.
                </p>

                <div class="flex">
                    <a href="{{route('client-products')}}"
                        class="btn-background  border btn-border font-bold
             text-white px-8 py-3 rounded-md z-50
           hover:bg-opacity-80 transition">
                        Acheter maintenant
                    </a>
                </div>
            </div>
            <div class="hidden md:flex col-span-1 h-full relative overflow-hidden">
                <div class="w-full">
                    <img src="{{ asset('Client/assets/images/disinfecting-in-home.jpg') }}" alt="image product"
                        width="300" height="auto" class="w-full h-full object-cover absolute rounded-l-[10rem]">
                </div>
            </div>
        </div>
    </div>
</section>