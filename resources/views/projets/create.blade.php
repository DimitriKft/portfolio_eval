@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ajoutez un nouveau projet :
  </div>
  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      <br/>
    @endif

    <form method="post" action="{{ route('projets.store') }}">
      <div class="form-group">
        @csrf
        <label for="name">Nom du projet:</label>
        <input type="text" class="form-control" name="name"/>
      </div>
      <div class="form-group">
        <label for="description">Description :</label>
        <textarea rows="5" columns="5" class="form-control" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="image_url">Image :</label>
        <input type="text" class="form-control" name="image_url"/>
      </div>
      <div class="form-group">
        <label for="technology">Technologie :</label>
        <input type="text" class="form-control" name="technology"/>
      </div>
      <div class="form-group">
        <label for="repo_url">Repository :</label>
        <input type="text" class="form-control" name="repo_url"/>
      </div>
      <div class="form-group">
        <label for="website_url">Site / hébergement :</label>
        <input type="text" class="form-control" name="website_url"/>
      </div>
      <div class="form_group">
        <select class="custom-select" name="categories_id">
          @foreach($cats as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-danger">Ajouter votre projet !</button>
    </form>
    
  </div>
</div>
@endsection