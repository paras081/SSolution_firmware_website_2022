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
                      <h1 class="display-6"> <span class="d-block text-center">Insert News Feed</span></h1>
                    <hr>
                </span>

                <div class="d-flex align-items-start bg-light mb-3" >
                    <div class="col"></div>
                    <div class="col">
                            @if(session('successMsg'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('successMsg') }}
                                </div>
                            @endif
                        <form action="{{ route('storeNewsFeed') }}" method="post" enctype="multipart/form-data">
                            @csrf
{{--                                {{ csrf_token() }}--}}

                            <!-- success alert -->
                            <!-- newsTitle input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="newsTitle" name="newsTitle" class="form-control" />
                                <label class="form-label" for="newsTitle">News Title</label>
                            </div>

                            <!-- newsDesc input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="newsDesc" name="newsDesc" class="form-control" />
                                <label class="form-label" for="newsDesc">News Description</label>
                            </div>

                             <!-- newsImg input -->
                             <div class="form-outline mb-4">
                                <input type="file" id="newsImg" name="newsImg" class="form-control" />
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Insert News Feed</button>
                        </form>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        @endsection
    </body>
</html>
