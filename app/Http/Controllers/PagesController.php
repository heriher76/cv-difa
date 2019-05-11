<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyBio;
use App\AboutMe;
use App\Experience;
use App\Quote;
use App\Education;
use App\Gallery;

class PagesController extends Controller
{
    public function index() {
    	$myBio = MyBio::first();
    	$myAbout = AboutMe::first();
    	$myExperiences = Experience::all();
    	$myEducations = Education::all();
    	$myQuote = Quote::first();
    	$myGalleries = Gallery::all();

    	return view('front.index', compact('myBio', 'myAbout', 'myExperiences', 'myQuote', 'myGalleries', 'myEducations'));
    }
}
