<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $fillable = ['first_name','last_name','profile_image'];
}
