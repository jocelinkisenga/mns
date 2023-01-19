<div>
    <div class="grid xl:col-span-3 lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0">
        <div class="xs:max-w-xs w-4/6 max-w-md">
          <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase"></h4>
          <div class="space-y-1 text-gray-600 pb-3 border-b border-gray-200">
            <div class="flex justify-between font-medium">
              <p>Sous total</p>
              <p>$ {{Cart::getTotal()}}</p>
            </div>
            <div class="flex justify-between">
              <p>Livraison</p>
              <p>Gratuite</p>
            </div>
            <div class="flex justify-between">
              <p>Tax</p>
              <p>16 %</p>
            </div>
          </div>
          <div class="flex justify-between my-3 text-gray-800 font-semibold uppercase">
            <h4>Total</h4>
            <h4>$ {{ (Cart::getTotal() + ((Cart::getTotal()/100)*16))}}</h4>
          </div>
          <div class="pt-6">
            <a href="{{route('client-checkout')}}" class="bg-pink-600 border border-pink-600
          text-white px-8 py-3 rounded-md z-50
        hover:bg-opacity-80 transition">
            Proceder au paiement
          </a>
          </div>
        </div>
      </div>
</div>
