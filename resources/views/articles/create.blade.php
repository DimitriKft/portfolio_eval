@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Corona Virus Data
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
                <textarea rows="5" columns="5" class="form-control" name="image_url"></textarea>
            </div>
            <div class="form-group">
                    <label for="user_id">Auteur :</label>
                    <textarea rows="5" columns="5" class="form-control" name="user_id"></textarea>
                </div>
                {{--  <div class="form_group">
                    <select class="custom-select" name="ore">
                        @foreach($articles as $user)
                        <option value="{{ $user->user_id }}">{{ $user->user_id }}</option>
                        @endforeach
                    </select>
                </div>  --}}
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection