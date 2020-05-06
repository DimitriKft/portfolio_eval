@extends('layouts.app')

@section('content')
     <div class="col-sm">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ Auth::user()->avatar }}" alt="Card image cap">
              <div class="card-body">
              <p class="card-text"> <b>Utilisateur : </b> {{ Auth::user()->name }}</p>
              <p class="card-text"><b>Email : </b>{{ Auth::user()->email }}</p>
              <p class="card-text"><b>Inscrit depuis le  : </b>{{ Auth::user()->created_at }}</p>
            </div>
            @auth
            <a href="{{ route('profile.edit', $members->first()->id)}}" class="btn btn-primary">Éditer</a>
            {{-- <form action="{{ route('profil.destroy', $members->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Supprimer</button>
            </form> --}}
            @endauth
@endsection 