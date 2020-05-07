@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenue sur mon portfolio</h1>
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Projet Mise en avant !</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($projets as $projet )
                        @if ( $projet->name == 'RECALL CORPORATE' )
                        <p>{{ $projet->name}}</p>
                        @endif
                        @if ( $projet->image_url == 'https://www.dimitri-klopfstein.com/wp-content/uploads/2019/12/Capture-d%E2%80%99%C3%A9cran-de-2019-12-16-16-06-28.png' )
                        <img class="card-img-top" src="{{ $projet->image_url }}" alt="">
                        @endif
                    @endforeach
                    <p><b>En savoir plus sur ce projet : <a href="http://127.0.0.1:8000/projets/8">C'est par ici</a></b></p>
                    <a href="http://marszoned.herokuapp.com/">Visiter le site</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
