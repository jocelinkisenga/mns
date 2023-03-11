@extends('Admin.layouts.app')

@section('content')

<div class="container pt-5 px-5 ">
    <div class="row pt-5">
        <div class="col-lg-2 "></div>
        <div class="col-lg-9 ">
            <div class="row bg- pt-5 d-flex shadow-sm pb-5 align-items-center justify-content-center flex-column ">
                <div class="row pb-5 pt-3">
                    <div class="text-center h3 fw-bold font-weight-bold">Modifier la categorie {{$categorie->name}}</div>
                </div>
                <div class="row">
                    <form action="{{route('admin.categories.update', $categorie->id)}}" method="post" enctype="multipart/form-data">
                      @csrf  <div class="form-group">
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            <label for="name"> name </label>
                            <input type="text" name="name" placeholder="nom de la categorie" value="{{$categorie->name}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="icon"> uploader un icon pour la categorie </label>
                            <input type="file" name="icon" placeholder="icone de la categorie"  class="form-control">
                        </div>

                        <button class="btn btn-background font-bold text-white">Enregistrer</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

@endsection
