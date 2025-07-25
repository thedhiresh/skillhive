<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'category_id', 'feature_image', 'title', 'description',
        'how_section', 'guidance', 'reference'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
