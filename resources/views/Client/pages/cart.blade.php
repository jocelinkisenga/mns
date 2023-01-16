@extends("Client.layouts.app")
@section('content')
    @php
      use Darryldecode\Cart\Facades\CartFacade;
    @endphp
  <section class="w-full overflow-hidden">
    <div class="appContainer pt-10">

{{-- start cart component --}}
      <livewire:card>
{{-- end cart component --}}


{{-- total card grid --}}
<livewire:total-card>
{{-- end total card grid --}}

    </div>
  </section>
@endsection