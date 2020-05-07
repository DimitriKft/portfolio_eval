@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   Créer un nouvelle catégorie
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

    <form method="post" action="{{ route('categories.store') }}">
      <div class="form-group">
        @csrf
        <label for="title">Nom de la catégorie :</label>
        <input type="text" class="form-control" name="name"/>
      </div>
      <div class="form-group">
        @csrf
        <label for="title">Slug :</label>
        <input type="text" class="form-control" name="slug"/>
      </div>  
      <button type="submit" class="btn btn-primary">Enregistrer nouvelle catégorie</button>
      </form>
      
  </div>
</div>
@endsection