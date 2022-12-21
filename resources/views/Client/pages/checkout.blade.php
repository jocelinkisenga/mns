@extends("Client.layouts.app")
@section("content")
<section class="w-full overflow-hidden">
    <div class="appContainer">
      <div class="w-full grid md:grid-cols-3 lg:grid-cols-5 items-start gap-6 pb-16 pt-4">
        <!-- checkout form -->
        <div class="md:col-span-2 lg:col-span-3 border bg-white shadow-sm border-gray-200 px-4 py-4 rounded">
          <form action="">
            <h3 class="text-lg font-medium capitalize mb-4">
              Paiement
            </h3>

            <div class="space-y-4">
              <div class="grid sm:grid-cols-2 gap-4">
                <div>
                  <label class="text-gray-600 mb-2 block">
                    Nom <span class="text-red-600">*</span>
                  </label>
                  <input type="text" class="input-box">
                </div>
                <div>
                  <label class="text-gray-600 mb-2 block">
                    Prenom <span class="text-red-600">*</span>
                  </label>
                  <input type="text" class="input-box">
                </div>
              </div>
              <div>
                <label class="text-gray-600 mb-2 block">
                  Pays/Region <span class="text-red-600">*</span>
                </label>
                <input type="text" class="input-box" placeholder="RDC- Lubumbashi">
              </div>
              <div>
                <label class="text-gray-600 mb-2 block">
                  Adresse physique <span class="text-red-600">*</span>
                </label>
                <input type="text" class="input-box" placeholder="Kasapa, Avenue Colonel Mulamba, Ref bus rouge" />
              </div>
              <div>
                <label class="text-gray-600 mb-2 block">
                  Numero Telephone <span class="text-red-600">*</span>
                </label>
                <input type="text" class="input-box" placeholder="+243 97 24 44 966">
              </div>
              <div>
                <label class="text-gray-600 mb-2 block">
                  Adresse email <span class="text-red-600">*</span>
                </label>
                <input type="text" class="input-box" placeholder="johndoe@gmail.com">
              </div>
            </div>
          </form>
        </div>
        <!-- checkout form end -->

        <!-- order summary -->
        <div
          class="lg:col-span-2 md:col-span-1 border bg-white shadow-sm border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0">
          <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">Votre commande</h4>
          <div class="space-y-2">
            <div class="flex justify-between" v-for="n in 3" :key="n">
              <div>
                <h5 class="text-gray-800 font-medium">Gadget mjs</h5>
                <p class="text-sm text-gray-600">Nice Wia</p>
              </div>
              <p class="text-gray-600">x3</p>
              <p class="text-gray-800 font-medium">$320</p>
            </div>
          </div>
          <div class="flex justify-between border-b border-gray-200 mt-1">
            <h4 class="text-gray-800 font-medium my-3 uppercase">Sous total</h4>
            <h4 class="text-gray-800 font-medium my-3 uppercase">$320</h4>
          </div>
          <div class="flex justify-between border-b border-gray-200">
            <h4 class="text-gray-800 font-medium my-3 uppercase">Livraison</h4>
            <h4 class="text-gray-800 font-medium my-3 uppercase">Gratuite</h4>
          </div>
          <div class="flex justify-between">
            <h4 class="text-gray-800 font-semibold my-3 uppercase">Total</h4>
            <h4 class="text-gray-800 font-semibold my-3 uppercase">$320</h4>
          </div>


          <div class="flex items-center mb-4 mt-2">
            <input type="checkbox" id="agreement" class="text-red-600 focus:ring-0 rounded-sm cursor-pointer w-3 h-3">
            <label for="agreement" class="text-gray-600 ml-3 cursor-pointer text-sm">
              J'accepte les
              <a href="#" class="text-red-600">termes & conditions</a>
            </label>
          </div>

          <button class="border-pink-600 py-2.5 border
                  bg-pink-600
                    hover:border-pink-600 text-white
                   hover:text-pink-600 transition
                   hover:bg-white
                   focus:bg-white text-sm font-light px-8 rounded
                    flex items-center gap-2">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                  d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z"
                  clip-rule="evenodd" />
              </svg>
            </span>
            <span>
              Valider le paiement
            </span>
          </button>
        </div>
      </div>
    </div>
  </section>

@endsection