@extends('welcome')


@section('content')
<h1>Ajout de produit</h1>
    <br>
    <form class="form-signin row col-sm-4 m-auto" action="/articles/store" method="POST">
        @csrf
        {{-- @if($errors->any())
            <h4 class="alert alert-danger">Il y a des erreurs!</h4>
            @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif --}}
        <div class="text-center mb-4">
        </div>
        <div class="form-label-group my-2">
            <label for="titreInput">Titre</label>
            <input name="titre" type="text" id="titreInput" class="form-control" placeholder="Entrer le titre" autofocus>
            @if($errors->has('titre'))
                <small class="text-danger">{{ $errors->first('titre') }}</small>
            @endif
        </div>

        <div class="form-label-group my-2">
            <label for="desxriptionInput">Description</label>
            <textarea rows="5" name="description" id="desxriptionInput" class="form-control" placeholder="Description de l'article"></textarea>
            @if($errors->has('description'))
                <small class="text-danger">{{ $errors->first('description') }}</small>
            @endif
        </div>

        <div class="form-label-group my-2">
            <label for="imageInput">Image</label>
            <input name="image" type="text" id="imageInput" class="form-control" placeholder="Url de l'image">
            @if($errors->has('image'))
                <small class="text-danger">{{ $errors->first('image') }}</small>
            @endif
        </div>

        <div class="checkbox mb-3">
        <label>
            <input name="online" type="checkbox" value="1"> Mettre en ligne
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
    </form>
@endsection
