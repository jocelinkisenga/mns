@php
use App\Models\Category;
@endphp
<footer>
    <div class="pt-8 bg-gray-50 border-t border-gray-200 mt-20">
      <div class="appContainer text-gray-600">
        <div>
          <div class="mb-6 gap-6 items-center justify-between py-6 sm:flex md:mb-16 md:py-0 md:space-y-6">
            <img src="{{asset('Client/assets/images/MS Logo JPG.jpg')}}" alt="logo M&S" class="w-32" width="100" height="42">
            <div class="flex flex-wrap flex-col-reverse gap-6 mt-6 sm:flex-row sm:mt-0 sm:items-center">
              <div class="flex gap-6">
                <a href="https://www.facebook.com/profile.php?id=100086416583276&mibextid=ZbWKwL" target="blank" aria-label="github" class="hover:text-pink-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                      </svg>
                </a>
                <a href="https://wa.me/243993066556" target="blank" aria-label="twitter" class="hover:text-pink-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                      </svg>
                </a>
                <a href="https://instagram.com/ms_home_gadgets?igshid=ZDdkNTZiNTM=" target="blank" aria-label="medium" class="hover:text-pink-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg>
                </a>
              </div>
            </div>
          </div>
          <div>
            <div class="pb-16 grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-5">
              <div>
                {{-- <form action="{{route('logout')}}" method="POST">
                  @csrf
                  <input type="submit" value="se deconnecter" class="rounded min-w-max md:w-max w-full font-bold flex justify-center  btn-background py-2 text-base transition duration-300 hover:bg-pink-100 px-8 md:px-6 md:py-6 text-white">
                </form> --}}
                <h6 class="text-lg font-medium text-gray-700">Categories</h6>
                <ul class="list-inside mt-4 space-y-4">
              @foreach (Category::whereVisible(true)->get() as $categorie )
              <li>
                <a href="{{route('client.categorie',['id'=>$categorie->id])}}" class="hover:text-pink-400 transition" style="color: gray">{{$categorie->name}}</a>
              </li>

              @endforeach
                </ul>
              </div>
              <div>
                <h6 class="text-lg font-medium text-gray-700">Produits</h6>
                <ul class="list-inside mt-4 space-y-4">
                  <li>
                    <a href="{{route('top.products')}}" class="hover:text-pink-400 transition" style="color: gray">Top produits</a>
                  </li>

                  <li>
                    <a href="{{route('most.products')}}" class="hover:text-pink-400 transition" style="color: gray">Plus vendus</a>
                  </li>
                  <li>
                    <a href="{{route('client-products')}}" class="hover:text-pink-400 transition" style="color: gray">Tous les produits</a>
                  </li>
                </ul>
              </div>
              <div>
                <h6 class="text-lg font-medium text-gray-700">Ressources</h6>
                <ul class="list-inside mt-4 space-y-4">
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">A propos</a>
                  </li>
                  @auth
                  @if(Auth::user()->role == 1)
                  <li>
                    <a href="{{route('admin.clients')}}" class="hover:text-pink-400 transition" style="color: gray">Clients</a>
                  </li>
                  @endif
                  @endauth
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">Entreprise</a>
                  </li>
                  
                </ul>
              </div>
              <div class="col-span-2 sm:col-span-3 md:col-span-2">
                <h6 class="text-lg font-medium text-gray-700">Contact</h6>
                <ul class="list-inside mt-4 space-y-4">
                  <li>
                    <a href="tel:+243996660436" class="hover:text-pink-400 transition" style="color: gray">+243  0993066556</a>
                  </li>
                  <li>
                    <a href="#" class="hover:text-pink-400 transition" style="color: gray">info@ms-homegadget.com</a>
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
 <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/640245544247f20fefe3d7c8/1gqkdtlsm';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->