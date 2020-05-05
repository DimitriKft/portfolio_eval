@extends('layout')

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
      <form method="post" action="{{ route('projets.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="symptoms">Description :</label>
              <textarea rows="5" columns="5" class="form-control" name="description"></textarea>
          </div>
          <div class="form-group">
                <label for="symptoms">Image :</label>
                <textarea rows="5" columns="5" class="form-control" name="image_url"></textarea>
            </div>
            <div class="form-group">
                    <label for="symptoms">Technologie :</label>
                    <textarea rows="5" columns="5" class="form-control" name="technology"></textarea>
                </div>
                <div class="form-group">
                        <label for="symptoms">Repository :</label>
                        <textarea rows="5" columns="5" class="form-control" name="repo_url"></textarea>
                    </div>
                    <div class="form-group">
                            <label for="symptoms">Site / hébergement :</label>
                            <textarea rows="5" columns="5" class="form-control" name="website_url"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="symptoms">Catégories :</label>
                                <textarea rows="5" columns="5" class="form-control" name="categories_id"></textarea>
                            </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection