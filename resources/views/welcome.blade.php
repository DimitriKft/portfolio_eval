@extends('layouts.app')

@section('content')
<div class="container">
        <div class="content">
                @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
                <div class="title m-b-md">
                    Porfolio DK
                </div>
</div>
@endsection
