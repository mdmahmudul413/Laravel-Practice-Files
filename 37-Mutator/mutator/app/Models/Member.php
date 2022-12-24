<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;

    use HasFactory;

    public function setNameAttribute($value){
        return $this->attributes['name'] = "Md. ".$value;
    }

    public function setContactAttribute($value){
        return $this->attributes['contact'] = '+880 ' . $value;
    }
}
