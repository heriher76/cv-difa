<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyBio extends Model
{
    protected $table = 'mybio';

    protected $fillable = ['street', 'address', 'handphone', 'photo_profile', 'photo_background', 'name', 'born', 'status', 'work_at', 'ig', 'in', 'fb', 'twitter', 'github'];
}
