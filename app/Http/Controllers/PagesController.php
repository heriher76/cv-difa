<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyBio;
use App\AboutMe;
use App\Experience;
use App\Slider;
use App\Education;
use App\Gallery;

class PagesController extends Controller
{
    public function index() {
    	$myBio = [];
    	$myAbout = AboutMe::first();
    	$myExperiences = [];
    	$myEducations = [];
    	$mySliders = Slider::all();
    	$myGalleries = Gallery::all();

    	return view('front.index', compact('myBio', 'myAbout', 'myExperiences', 'mySliders', 'myGalleries', 'myEducations'));
    }

    public function calc() {
    	return view('front.calculator');
    }

    public function about() {
    	return view('front.about');
    }
}
