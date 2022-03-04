
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}"   type="image/x-icon" />
</head>
<body class="antialiased">
@extends('layouts.base')

@section('body')
<div class="container">
                <hr>
                <h1 class="display-6 d-flex justify-content-center">Career</h1>
                <hr>
                <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
   
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Role</h5>
        <small>
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </small>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
      </div>
    </div>
  </div>
</div>
</div>    
@endsection
</body>
</html>
