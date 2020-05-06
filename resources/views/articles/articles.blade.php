@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    @foreach($articles as $case) 
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $case->image_url }}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{ $case->title }}</h5>
        <p class="card-text">{{ Illuminate\Support\Str::limit($case->description, 150) }}</p>
        <p class="card-text">{{ $case->user_id }}</p>
      </div>
      <a href="{{ route('articles.show', $case->id)}}" class="btn btn-success">Voir L'article</a>
      @auth
      <a href="{{ route('articles.edit', $case->id)}}" class="btn btn-primary">Éditer</a>
      <form action="{{ route('articles.destroy', $case->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Supprimer</button>
      </form>
      @endauth
  </div>
</div>
    @endforeach
  </div>
@endsection
