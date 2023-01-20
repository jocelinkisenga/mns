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

@if (session("message"))
<div class="grid xl:col-span-3 lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0 mb-3">
<h3 class=" text-red-600">{{session("message")}}</h3>  
</div>
@endif

{{-- total card grid --}}
<livewire:total-card>
{{-- end total card grid --}}

    </div>
  </section>
@endsection