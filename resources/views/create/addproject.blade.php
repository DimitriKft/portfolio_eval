@extends('layouts.app')

@section('content')
<h1 align="center">Nouveau minerai</h1>
<form action="/projets" method="POST" align="center" class="container">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Donnez un nom au minerai...">
        @error('name')
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="description" placeholder="Donnez une description du minerai...">
    </div>
    <br>
    <button type="submit" class="btn btn-danger">Partagez votre découverte</button>
</form>

@endsection