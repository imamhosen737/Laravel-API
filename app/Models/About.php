<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'top_title',
        'top_description',
        'sub_title',
        'sub_description',
        'dob',
        'address',
        
    ];
}
