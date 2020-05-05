@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          {{--  <td>Image</td>
          <td>Technologie</td>
          <td>Repository</td>
          <td>Site web ou Hébergement</td>
          <td>Catégorie du projet</td>  --}}
        </tr>
    </thead>
    <tbody>
        @foreach($projets as $case)
        <tr>
            <td>{{$case->id}}</td>
            <td>{{$case->name}}</td>
            <td>{{$case->description}}</td>
            {{--  <td>{{$case->image_url}}</td>
            <td>{{$case->technology}}</td>
            <td>{{$case->repo_url}}</td>
            <td>{{$case->website_url}}</td>
            <td>{{$case->categories_id}}</td>  --}}
            <td><a href="{{ route('projets.edit', $case->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('projets.destroy', $case->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
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