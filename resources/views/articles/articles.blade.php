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
<div>
    @foreach($articles as $case)
    <div class="card mb-3">
        <img class="card-img-top" src="{{$case->image_url}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$case->title}}</h5>
          <p class="card-text">{{$case->description}}</p>
          <p class="card-text"><small class="text-muted">Last updated {{$case->updated_at}}</small></p>
        </div>
      </div>
        @auth
            
      
        <td><a href="{{ route('articles.edit', $case->id)}}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('articles.destroy', $case->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endauth
    @endforeach
@endsection
