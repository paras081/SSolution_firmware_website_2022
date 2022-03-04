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
                      <h1 class="display-6"> <span class="d-block text-center">View News Feed</span></h1>
                    <hr>
                </span>

                <table class="table">
                        <thead>
                            <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">News Title</th>
                            <th scope="col">News Description</th>
                            <th scope="col">News Image Name</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newsFeedTableData as $eachNewsFeedTableData)
                            <tr>
                            <th scope="row">{{$eachNewsFeedTableData->id}}</th>
                            <td>{{$eachNewsFeedTableData->newsTitle}}</td>
                            <td>{{$eachNewsFeedTableData->newsDesc}}</td>
                            <td>{{$eachNewsFeedTableData->newsImg}}</td>
                            <td>
                                <a href="#"><i style="color:black" class="fa fa-edit fa-2x"></i></a> &nbsp&nbsp&nbsp||&nbsp&nbsp&nbsp   
                               
                                <!-- <form  action="{{ route('deleteNewsFeed')}}">

                                </form> -->
                                <button onclick="">
                                    <i style="color:black" class="fa fa-trash fa-2x" aria-hidden="true"></i>
                                </button>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        @endsection
    </body>
</html>
