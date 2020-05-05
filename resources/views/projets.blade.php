@extends('layouts.app')


@section('content')
<div align="center" class="container">

<p>{{ $projets }}</p>
{{--  
    @foreach ($projets as $projet )
        <p>{{ $projets->description }}</p>
    @endforeach <br> --}}
</div>

@endsection