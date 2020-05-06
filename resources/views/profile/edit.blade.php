@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   <h5><b>{{ $projets->name }}</b></h5>
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
      <form method="post" action="{{ route('profil.update', $members->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $members->name }}"/>
          </div>
          <div class="form-group">
                <label for="description">description :</label>
                <input type="text" class="form-control" name="name" value="{{ $members->first_name }}"/>
            </div>
          <div class="form-group">
              <label for="description">description :</label>
              <input type="text" class="form-control" name="name" value="{{ $members->email }}"/>
          </div>
          <div class="form-group">
              <label for="image_url">image_url :</label>
              <input type="text" class="form-control" name="image_url" value="{{ $members->avatar }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Editer le projet</button>
      </form>
  </div>
</div>
@endsection