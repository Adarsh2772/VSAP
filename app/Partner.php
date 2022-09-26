<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
    	'ca_img',
        'caname',
        'qualification',
        'email',
        'mob_no',
        'descript'
         
    ];
}
