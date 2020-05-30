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
            
            (isset($input['photo_profile'])) ? $namaProfile = str_random().'.'.$input['photo_profile']->getClientOriginalExtension() : $namaProfile = null;

            AboutMe::create([
                'description' => $input['description'],
                'name' => $input['name'],
                'email' => $input['email'],
                'address' => $input['address'],
                'study' => $input['study'],
                'university' => $input['university'],
                'hp' => $input['hp'],
                'line' => $input['line'],
                'ig' => $input['ig'],
                'fb' => $input['fb'],
                'twitter' => $input['twitter'],
                'yt' => $input['yt'],
                'wa' => $input['wa'],
                'photo_profile' => $namaProfile
            ]);

            (isset($input['photo_profile'])) ? $input['photo_profile']->move(public_path('mybio'), $namaProfile) : null;

        }else{
            $myAbout = AboutMe::first();

            (isset($input['photo_profile'])) ? $namaProfile = str_random().'.'.$input['photo_profile']->getClientOriginalExtension() : $namaProfile = null;

            $myAbout->update([
                'description' => $input['description'],
                'name' => $input['name'],
                'email' => $input['email'],
                'address' => $input['address'],
                'study' => $input['study'],
                'university' => $input['university'],
                'hp' => $input['hp'],
                'line' => $input['line'],
                'ig' => $input['ig'],
                'fb' => $input['fb'],
                'twitter' => $input['twitter'],
                'yt' => $input['yt'],
                'wa' => $input['wa'],
                'photo_profile' => $namaProfile
            ]);


            (isset($input['photo_profile'])) ? $input['photo_profile']->move(public_path('mybio'), $namaProfile) : null;
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
