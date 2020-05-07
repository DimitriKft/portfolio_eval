@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   <h5><b>{{ $members->name }}</b></h5>
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
      <form method="POST" action="{{ route('profile.update', $members->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Prénom:</label>
              <input type="text" class="form-control" name="name" value="{{ $members->name }}"/>
          </div>
          {{--  <div class="form-group">
                <label for="description">Nom :</label>
                <input type="text" class="form-control" name="first_name" value="{{ $members->first_name }}"/>
            </div>  --}}
          <div class="form-group">
              <label for="description">Email :</label>
              <input type="text" class="form-control" name="email" value="{{ $members->email }}"/>
          </div>
          <div class="form-group">
              <label for="image_url">Avatar :</label>
              <input type="text" class="form-control" name="avatar" value="{{ $members->avatar }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Editer le projet</button>
      </form>
  </div>
</div>
@endsection