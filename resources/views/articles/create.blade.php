@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   Créer un nouvelle article
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
      <form method="post" action="{{ route('articles.store') }}">
          <div class="form-group">
              @csrf
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <textarea rows="5" columns="5" class="form-control" name="description"></textarea>
          </div>
          <div class="form-group">
                <label for="image_url">Image :</label>
                <input type="text" class="form-control" name="image_url"/>
            </div>
                 <div class="form_group">
                    <select class="custom-select" name="user_id">
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div> 

                {{-- <div class="form_group">
                  <select class="custom-select" name="categories_id">
                      @foreach($cats as $cat)
                      <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                      @endforeach
                  </select>
              </div> --}}
          <button type="submit" class="btn btn-primary">Soumettre</button>
      </form>
  </div>
</div>
@endsection