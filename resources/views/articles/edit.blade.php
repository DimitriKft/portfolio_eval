@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Corona Virus Data
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
      <form method="post" action="{{ route('articles.update', $articles->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="title">Titre:</label>
              <input type="text" class="form-control" name="title" value="{{ $articles->title }}"/>
          </div>
          <div class="form-group">
              <label for="description">description :</label>
              <textarea rows="5" columns="5" class="form-control" name="description">{{ $articles->description }}</textarea>
          </div>
          <div class="form-group">
              <label for="image_url">image_url :</label>
              <input type="text" class="form-control" name="image_url" value="{{ $articles->image_url }}"/>
          </div>
          <div class="form-group">
                <label for="user_id">Auteur :</label>
                <input type="text" class="form-control" name="user_id" value="{{ $articles->user_id }}"/>
            </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection