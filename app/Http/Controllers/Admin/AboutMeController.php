<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AboutMe;

class AboutMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myAbout = AboutMe::first();

        return view('admin.about-me.index', compact('myAbout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $input = $request->all();

        if(AboutMe::first() == null) {
            
            AboutMe::create([
                'description' => $input['description'],
                'focus1' => $input['focus1'],
                'focus2' => $input['focus2'],
                'focus3' => $input['focus3'],
                'focus4' => $input['focus4']
            ]);

        }else{
            $myAbout = AboutMe::first();

            $myAbout->update([
                'description' => $input['description'],
                'focus1' => $input['focus1'],
                'focus2' => $input['focus2'],
                'focus3' => $input['focus3'],
                'focus4' => $input['focus4']
            ]);
        }
        return redirect('admin');
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
