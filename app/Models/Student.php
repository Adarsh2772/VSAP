<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'simg',
    	'roll_no',
        'name',
        'class',
        'age',
        'dob',
        'school_name',
        'phone_no',
        'email'       
    ];
}
