@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    @foreach($projets as $case) 
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $case->image_url }}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{ $case->name }}</h5>
        <p class="card-text">{{ $case->description }}</p>
        <p class="card-text"> <b>Technologies : </b>{{ $case->technology }}</p>
        <p class="card-text"><b>Repository : </b>{{ $case->repo_url }}</p>
        <p class="card-text"><b>Site web/Hébergement : </b>{{ $case->website_url }}</p>
        <p class="card-text"><b>Catégorie du porjet : </b>{{ $case->categories_id }}</p>
      </div>
      <a href="{{ route('projets.show', $case->id)}}" class="btn btn-success">Voir le projet</a>
      @auth
      <a href="{{ route('projets.edit', $case->id)}}" class="btn btn-primary">Éditer</a>
      <form action="{{ route('projets.destroy', $case->id)}}" method="post">
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
{{--  @extends('layouts.app')


@section('content')
<div align="center" class="container">



@foreach($projets as $key => $data)

      <p>{{$data->name}}</p>  
      <p>{{$data->description}}</p>    
      <p>{{$data->technology}}</p>         
      <p>{{$data->website_url}}</p>
      <p>{{$data->name}}</p>        
@endforeach
{{--  
    @foreach ($projets as $projet )
        <p>{{ $projets->description }}</p>
    @endforeach <br> --}}
{{--  </div>

@endsection  --}}  