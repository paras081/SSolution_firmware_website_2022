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
                      <h1 class="display-6"> <span class="d-block text-center">Welcome to SSolution</span></h1>
                    <hr>
                </span>
                <div class="d-flex align-items-start bg-light mb-3 ">
                    <div class="col">
                        <div class="card">
                            <img
                                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                                class="card-img-top"
                                alt="Fissure in Sandstone"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img
                                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                                class="card-img-top"
                                alt="Fissure in Sandstone"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img
                                src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
                                class="card-img-top"
                                alt="Fissure in Sandstone"
                            />
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's content.
                                </p>
                                <a href="#!" class="btn btn-primary">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>
