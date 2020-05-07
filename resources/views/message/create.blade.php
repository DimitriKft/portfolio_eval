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
      <form method="post" action="{{ route('message.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Votre nom :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
                <label for="image_url">Votre email :</label>
                <input type="text" class="form-control" name="email"/>
            </div>
          <div class="form-group">
              <label for="description">Votre message :</label>
              <textarea rows="5" columns="5" class="form-control" name="message"></textarea>
          </div>
                <button type="submit" class="btn btn-primary">Envoyer votre message</button>
      </form>
  </div>
</div>
@endsection