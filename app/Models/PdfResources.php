<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfResources extends Model
{
    use HasFactory;

    protected $table = 'pdfresource';

    protected $fillable = [
        'title',
        'type',
        'description',
        'url'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Accessor for formatted creation date
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('M d, Y');
    }

    // Scope for filtering by type
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
