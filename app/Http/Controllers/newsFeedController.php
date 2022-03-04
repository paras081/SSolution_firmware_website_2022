<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newsFeed;

class newsFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertNewsFeed()
    {
        return view('admin.insertNewsFeed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewNewsFeed()
    {
        $newsFeedTableData = newsFeed::all();
        return view('admin.viewNewsFeed',compact('newsFeedTableData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeNewsFeed(Request $request)
    {
        $this->validate($request,[
            'newsTitle' =>'required',
            'newsDesc' =>'required',
            'newsImg' =>'required | image |max:2048 | mimes:jpeg,png,jpg,svg,ico',
        ]);

        $imagname = time().'.'.$request->newsImg->extension();

        $request->newsImg->move(public_path('img/newsFeed_img'),$imagname);

        $newsFeedTable = new newsFeed();

        $newsFeedTable->newsTitle =$request->newsTitle;
        $newsFeedTable->newsDesc =$request->newsDesc;
        $newsFeedTable->newsImg =$imagname;
        $newsFeedTable->save();
       
        return redirect(route('insertNewsFeed'))->with('successMsg','Successfully News Feed Inserted ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteNewsFeed($id)
    {
        newsFeed::find($id)->delete();
        return view('admin.viewNewsFeed'); 
    }
}
