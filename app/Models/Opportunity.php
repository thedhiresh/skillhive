<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    //
    protected $fillable = [
        'type',
        'title',
        'category',
        'for',
        'description',
    ];
}
