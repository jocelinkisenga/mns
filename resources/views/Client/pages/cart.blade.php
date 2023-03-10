@extends("Client.layouts.app")
@section('content')
    @php
      use Darryldecode\Cart\Facades\CartFacade;
      $cartCollection = Cart::getContent();

    @endphp
  <section class="w-full overflow-hidden">
    <div class="appContainer pt-10">
@if ($cartCollection->count()>0)


{{-- start cart component --}}
      <livewire:card>
{{-- end cart component --}}


{{-- total card grid --}}
<livewire:total-card>
{{-- end total card grid --}}

@else
<div class="flex items-center justify-center">

    <div class="h1"> Le  Panier est vide pour l'instant </div>

</div>

@endif
    </div>
  </section>
@endsection
