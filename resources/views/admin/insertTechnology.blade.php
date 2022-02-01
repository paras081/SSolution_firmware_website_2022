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
        @extends('layouts.admin.adminBase')

        @section('body')
            <div class="container d-flex flex-column min-vh-100">
                    <hr>
                      <h1 class="display-6"> <span class="d-block text-center">Insert Technology</span></h1>
                    <hr>
                </span>

                <div class="d-flex align-items-start bg-light mb-3" >
                    <div class="col"></div>
                    <div class="col">
                        <form action="{{ route('storeTech') }}" method="post">
                            @csrf
{{--                                {{ csrf_token() }}--}}
                            <!-- techTitle input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="techTitle" name="techTitle" class="form-control" />
                                <label class="form-label" for="techTitle">Technology Title</label>
                            </div>

                            <!-- techDesc input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="techDesc" name="techDesc" class="form-control" />
                                <label class="form-label" for="techDesc">technology Description</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Insert Technology</button>
                        </form>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        @endsection
    </body>
</html>
