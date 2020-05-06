@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
      {{ $projets->name }}
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif


        <div class="card mb-3">
                <img class="card-img-top" src="{{ $projets->image_url }}" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{ $projets->name }}</h5>
                <p class="card-text">{{ $projets->description }}</p>
                <p class="card-text"> <b>Technologies : </b>{{ $projets->technology }}</p>
                <p class="card-text"><b>Repository : </b>{{ $projets->repo_url }}</p>
                <p class="card-text"><b>Site web/Hébergement : </b>{{ $projets->website_url }}</p>
                <p class="card-text"><b>Catégorie du porjet : </b>{{ $projets->categories_id }}</p>projets
            </div>
          </div>
              @auth
              <a href="{{ route('projets.edit', $projets->id)}}" class="btn btn-primary">Éditer</a>
              <form action="{{ route('projets.destroy', $projets->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
              </form>
              @endauth
            </div>
          </div>
  </div>
</div>
@endsection

