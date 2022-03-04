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
                <h1 class="display-6 d-flex justify-content-center">Grow Your Business with SustainableSolutions</h1>
                <hr>

                    <div class="row">
                        @foreach($techTableData as $eachTechTableData)
                        <div class="col mb-3">
                            <div class="card">
                                <img
                                    src="{{url('/img/tech_img/'.$eachTechTableData->techImg) }}"
                                    class="card-img-top"
                                    alt="Fissure in Sandstone"
                                    height="300px"
                                />
                                <div class="card-body">
                                    <h5 class="card-title">{{$eachTechTableData->techTitle}}</h5>
                                    <p class="card-text">
                                       {{$eachTechTableData->techDesc}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        @endsection
    </body>
</html>
