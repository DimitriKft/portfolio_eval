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
      </div>
      <br/>
    @endif

    <form method="post" action="{{ route('projets.update', $projets->id ) }}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="{{ $projets->name }}"/>
      </div>
      <div class="form-group">
        <label for="description">description :</label>
        <textarea rows="5" columns="5" class="form-control" name="description">{{ $projets->description }}</textarea>
      </div>
      <div class="form-group">
        <label for="image_url">image_url :</label>
        <input type="text" class="form-control" name="image_url" value="{{ $projets->image_url }}"/>
      </div>
      <div class="form-group">
        <label for="technology">technology :</label>
        <input type="text" class="form-control" name="technology" value="{{ $projets->technology }}"/>
      </div>
      <div class="form-group">
        <label for="repo_url">repo_url :</label>
        <input type="text" class="form-control" name="repo_url" value="{{ $projets->repo_url }}"/>
      </div>
      <div class="form-group">
        <label for="website_url">website_url :</label>
        <input type="text" class="form-control" name="website_url" value="{{ $projets->website_url }}"/>
      </div>
      <div class="form_group">
        <select class="custom-select" name="categories_id">
        @foreach($cats as $cat)
          <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
      </select>
      </div>
      <button type="submit" class="btn btn-primary">Editer le projet</button>
    </form>
    
  </div>
</div>
@endsection