@extends('layouts.app')

@section('content')
<div class="container">
        <div class="content">
                @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    <p>{{ $articles->name }}</p>
   {{-- <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $projet->image_url }}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{ $projet->name }}</h5>
        <p class="card-text">{{ Illuminate\Support\Str::limit($projet->description, 150) }}</p>
        <p class="card-text"> <b>Technologies : </b>{{ $projet->technology }}</p>
        <p class="card-text"><b>Repository : </b>{{ $projet->repo_url }}</p>
        <p class="card-text"><b>Site web/Hébergement : </b>{{ $projet->website_url }}</p>
        @foreach ($cats as $cat)
          @if( $projet->categories_id == $cat->id  )
            <p class="card-text"><b>Catégorie du porjet : </b>{{ $cat->name }}</p>
          @endif
        @endforeach
         @foreach ($cats as $cat)
          @if( $projet->categories_id == $cat->id  )
            <p class="card-text"><b>Catégorie du porjet : </b>{{ $cat->name }}</p>
          @endif
        @endforeach

      </div> --}}
</div>
@endsection
