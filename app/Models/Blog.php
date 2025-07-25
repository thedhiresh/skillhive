<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'published',
        'featured_image',
        'url'
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    // Scope for published blog
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    // Scope for draft blog
    public function scopeDraft($query)
    {
        return $query->where('published', false);
    }

    // Accessor for status
    public function getStatusAttribute()
    {
        return $this->published ? 'Published' : 'Draft';
    }
}
