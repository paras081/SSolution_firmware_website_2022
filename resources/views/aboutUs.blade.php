
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
    <h1>  About Us </h1>
@endsection
</body>
</html>
