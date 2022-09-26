<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'services',
        'add',
        'office_no',
        'email',
        'website'       
    ];
}
