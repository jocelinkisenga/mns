<footer>
    <div class="pt-8 bg-gray-50 border-t border-gray-200 mt-20">
      <div class="appContainer text-gray-600">
        <div>
          <div class="mb-6 gap-6 items-center justify-between py-6 sm:flex md:mb-16 md:py-0 md:space-y-6">
            <img src="{{asset('Client/assets/images/MS Logo JPG.jpg')}}" alt="logo M&S" class="w-32" width="100" height="42">
            <div class="flex flex-wrap flex-col-reverse gap-6 mt-6 sm:flex-row sm:mt-0 sm:items-center">
              <div class="flex gap-6">
                <a href="#" target="blank" aria-label="github" class="hover:text-pink-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-github" viewBox="0 0 16 16">
                    <path
                      d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                    </path>
                  </svg>
                </a>
                <a href="#" target="blank" aria-label="twitter" class="hover:text-pink-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-twitter" viewBox="0 0 16 16">
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                    </path>
                  </svg>
                </a>
                <a href="#" target="blank" aria-label="medium" class="hover:text-pink-400">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-medium" viewBox="0 0 16 16">
                    <path
                      d="M9.025 8c0 2.485-2.02 4.5-4.513 4.5A4.506 4.506 0 0 1 0 8c0-2.486 2.02-4.5 4.512-4.5A4.506 4.506 0 0 1 9.025 8zm4.95 0c0 2.34-1.01 4.236-2.256 4.236-1.246 0-2.256-1.897-2.256-4.236 0-2.34 1.01-4.236 2.256-4.236 1.246 0 2.256 1.897 2.256 4.236zM16 8c0 2.096-.355 3.795-.794 3.795-.438 0-.793-1.7-.793-3.795 0-2.096.355-3.795.794-3.795.438 0 .793 1.699.793 3.795z">
                    </path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="pb-16 grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-5">
              <div>
                <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <input type="submit" value="se deconnecter" class="rounded min-w-max md:w-max w-full font-bold flex justify-center  btn-background py-2 text-base transition duration-300 hover:bg-pink-100 px-8 md:px-6 md:py-6 text-white">
                </form>
                <h6 class="text-lg font-medium text-gray-700">Categories</h6>
                <ul class="list-inside mt-4 space-y-4">
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Appareil</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Telephone</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Chaussure</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Telephone</a>
                  </li>
                </ul>
              </div>
              <div>
                <h6 class="text-lg font-medium text-gray-700">Produits</h6>
                <ul class="list-inside mt-4 space-y-4">
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Top produits</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Mieux notes</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Plus vendus</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Tous les produits</a>
                  </li>
                </ul>
              </div>
              <div>
                <h6 class="text-lg font-medium text-gray-700">Ressources</h6>
                <ul class="list-inside mt-4 space-y-4">
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">A propos</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Clients</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Entreprise</a>
                  </li>
                  <li>
                    <a href="http://ms-homegadget.com:2096/" class="hover:text-pink-400 transition" style="color: gray">Web Mail</a>
                  </li>
                </ul>
              </div>
              <div class="col-span-2 sm:col-span-3 md:col-span-2">
                <h6 class="text-lg font-medium text-gray-700">Contact</h6>
                <ul class="list-inside mt-4 space-y-4">
                  <li>
                    <a href="tel:+243996660436" class="hover:text-pink-400 transition" style="color: gray">+243 972 44 49 66</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">johnkatembue4@gmail.com</a>
                  </li>

                </ul>
              </div>
            </div>
            <div class="py-4 gap-4 border-t border-gray-400 text-gray-600 flex justify-center">
              <span>© <a href="https://link-dcs.com/" target="_blank">Link-DCS</a> - <span id="fetchYear"></span></span>
              <span>All right reserved</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>