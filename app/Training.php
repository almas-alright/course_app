<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'start_at', 'end_at',
    ];

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
