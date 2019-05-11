<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $table = 'aboutme';

    protected $fillable = ['description', 'focus1', 'focus2', 'focus3', 'focus4'];
}
