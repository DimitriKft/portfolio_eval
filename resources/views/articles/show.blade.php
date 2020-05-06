@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
      {{ $articles->title }}
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
            <img class="card-img-top" src="{{ $articles->image_url }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $articles->title }}</h5>
              <p class="card-text">{{ $articles->description }}</p>
              <p class="card-text"><small class="text-muted">{{ $articles->user_id }}</small></p>
            </div>
          </div>
              @auth
              <a href="{{ route('articles.edit', $articles->id)}}" class="btn btn-primary">Éditer</a>
              <form action="{{ route('articles.destroy', $articles->id)}}" method="post">
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

