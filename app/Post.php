<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'content',
    ];

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
