<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function companyData(){
        return $this->hasOne('App\Models\Company');

        // To build one to many relation
        // return $this->hasMnay('App\Models\Company');
    }
}
