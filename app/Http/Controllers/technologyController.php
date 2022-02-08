<?php

namespace App\Http\Controllers;


use App\Models\technology;
use Illuminate\Http\Request;

class technologyController extends Controller
{
    public function index()
    {
//        return view('contactUs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertTech()
    {
        return view('admin.insertTechnology');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTech(Request $request)
    {
//       dd($request->techTitle);
        $this->validate($request,[
            'techTitle' =>'required',
            'techDesc' =>'required',
            'techImg' =>'required | image |max:2048 | mimes:jpeg,png,jpg,svg,ico',
        ]);

        // original file - certi.png
        // databse rename save - 084508022022.png
        $imagname = time().'.'.$request->techImg->extension();

        $request->techImg->move(public_path('img/tech_img'),$imagname);

        $techTable = new technology();

        $techTable->techTitle =$request->techTitle;
        $techTable->techDesc =$request->techDesc;
        $techTable->techImg =$imagname;
        $techTable->save();

        
        return redirect(route('insertTech'))->with('successMsg','Successfully Technology Inserted ');
        //steps
        //1.request data validate
        //1.2 create database object --> model object
        //2.request data assign in database columns -respectively
        //3.use save method to trigger insert operation in DB
        //4.successfully redirection
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
    public function destroy($id)
    {
        //
    }
}
