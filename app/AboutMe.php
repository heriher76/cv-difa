<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $table = 'aboutme';

    protected $fillable = ['description', 'name', 'email', 'address', 'study', 'university', 'hp', 'line', 'ig', 'fb', 'twitter', 'yt', 'wa', 'photo_profile'];
    
}
