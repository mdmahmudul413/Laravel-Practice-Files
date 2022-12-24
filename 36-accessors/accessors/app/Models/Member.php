<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    // function for making first letter Small to Capital from a specific field in a table
    function getNameAttribute($value){
        return ucFirst($value);
    }
    function getContactAttribute($value){
        return '+880 ' . $value;
    }
}
