@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    @foreach($message as $msg) 
    <div class="col-sm">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{ $msg->name }}</h5>
        <p class="card-text"><b>Email : </b>{{ $msg->email }}</p>
        <p class="card-text"><b>Message : </b>{{ $msg->message }}</p>
      </div>
  </div>
</div>
    @endforeach
  </div>
@endsection
