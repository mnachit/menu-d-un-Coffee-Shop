<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffee extends Model
{
    use HasFactory;
    protected $table = "coffees";
    protected $fillable = [
         'pic_image', 'title', 'prix', 'description', 'Start_date', 'end_date',
    ];
}
