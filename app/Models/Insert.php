<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insert extends Model
{
    use HasFactory;


    protected $fillable = [
        'cardnumber',
        'name',
        'gender',
        'date',
        'entry',
        'exit',
        'status',
        'loc',
        'sort1'
    ];
}
