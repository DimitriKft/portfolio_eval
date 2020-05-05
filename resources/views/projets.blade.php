@extends('layouts.app')


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
</div>

@endsection