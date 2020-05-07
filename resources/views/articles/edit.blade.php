@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edition de l'article : <h2><b>{{ $articles->title }}</b></h2>
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
      <div class="form_group">
        <select class="custom-select" name="user_id">
          @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
        </select>
      </div> 
      <br>
      <button type="submit" class="btn btn-primary">Editer l'article</button>
    </form>
    
  </div>
</div>
@endsection