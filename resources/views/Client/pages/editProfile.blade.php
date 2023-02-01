@extends("Client.layouts.app")
@section("content")
@php
  use GuzzleHttp\Exception\ConnectException;
@endphp
<section class="w-full overflow-hidden">
    <div class="appContainer">
      <div class="w-full grid md:grid-cols-3 lg:grid-cols-5 items-start gap-6 pb-16 pt-4">
        <!-- checkout form -->
        <div class="md:col-span-2 lg:col-span-3 border bg-white shadow-sm border-gray-200 px-4 py-4 rounded">
          <form action="{{route('update.profile')}}" method="POST">
            @method('put')
            @csrf
      
            <h3 class="text-lg font-medium capitalize mb-4">
              modifier votre profile
            </h3>
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="space-y-4">
              <div>
                <label class="text-gray-600 mb-2 block">
                  noms <span class="text-red-600">*   @error("country") {{$message}}  @enderror </span>
                </label>
                <input type="text" name="name" class="input-box" value="{{Auth::user()->name}}">
              </div>
              <div>
                <label class="text-gray-600 mb-2 block">
                  email <span class="text-red-600">*   @error("address") {{$message}}  @enderror </span>
                </label>
                <input type="text" name="email" class="input-box" value="{{Auth::user()->email}}" />
              </div>
              <div>
                <label class="text-gray-600 mb-2 block">
                  mot de passe <span class="text-red-600">*   @error("phone") {{$message}}  @enderror </span>
                </label>
                <input type="password" name="password" class="input-box">
              </div>

            </div>
            <button type="submit" class="border-pink-600 py-2.5 border mt-4
            btn-background btn-border
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
    modifier
    </span>
  </button>
            
       
    
        </div>
        <!-- checkout form end -->

        <!-- order summary -->


        </form>
        
      </div>
    </div>
  </section>

@endsection