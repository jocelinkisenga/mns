<div>

    <div class="xl:col-span-9 lg:col-span-8">


        <div class="space-y-2 mb-10">
          @isset ($items)
              @foreach ($items as $item )
              @php
    $prod = App\Models\Product::where("id", $item['id'])->first();

@endphp

              <div
              class="flex items-center md:justify-between gap-4 md:gap-6 p-4 border border-gray-200 rounded flex-wrap md:flex-nowrap">

              <div class="w-32 min-w-max">
                <img src="{{asset('storage/uploads/'.$item['attributes']['image'])}}" class="w-full object-cover rounded h-20 sm:h-20 md:h-24">
              </div>
              <div class="md:w-1/3 w-full">
                <h2 class="text-gray-600 mb-2 text-xl ">
                  {{$item['name']}}
                </h2>
                <p class="text-pink-600 text-lg font-semibold">{{$item['price']}} $</p>
                <div class="flex justify-start font-medium mb-2">
                    <p>Couleur :</p>
                    <p class="px-2">
                        @foreach(session()->all() as $key => $value)
                        @if ($key=="color-".$item['id'])
                          <span style="background-color: {{$value}}; padding:1rem; border:1px solid black;"></span>   <br>
                        @endif
                    @endforeach
                    </p>
                </div>
              </div>
              <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300">
                <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none"><button type="button" wire:click.prevent="reduce({{$item['id']}})">-</button></div>
                <input name="" id="" class="h-8 w-10 flex items-center justify-center px-2 text-center" value="{{$item['quantity']}}">
                <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none"><button type="button" wire:click.prevent="add({{$item['id']}})">+</button></div>
              </div>
              <br>
              <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300">

                <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                    <form action="#" method="post"  class="flex items-center form_color">
                        @csrf
                    @foreach ($prod->couleurs as  $col)

                    <div id="{{str_shuffle('abcdefghijklmnop').$col->name}}" onclick="send_data('{{$col->name}}', '{{$col->product_id}}', '{{route('product.choose_color', $col->name, $col->product_id)}}')" test="$choose_color({{$col->name}}, {{$col->product_id}})" style="background-color: {{$col->name}}; padding:1rem;"></div>
                    @endforeach
                </form>

                </div>
              </div>
              <div class="ml-auto md:ml-0">
                <p class="text-primary text-lg font-semibold">{{$item['price'] * $item['quantity']}} $</p>
              </div>

              <div class="text-gray-600 hover:text-primary cursor-pointer">
                <a wire:click.prevent="empty({{$item['id']}})">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                </svg>
              </a>
              </div>
            </div>
              @endforeach
          @endif

<script>
    function send_data(data, product_id, route){
        console.log(data)
        console.log(route)
        const form = new FormData();
        form.append('color', data)
        form.append('product_id', product_id)
        form.append('_token', document.querySelector('.form_color')._token.value);
        fetch(route, {
            method:"POST", body:form
        })
        .then(data=>data.text())
        .then((e)=>{console.log(e)
            Swal.fire(
  'Couleur choisi avec succés!',
  'effectué',
  'success'
)
setTimeout(() => {
window.location.reload()
}, 2500);
})
    }
</script>
        </div>
      </div>
</div>
