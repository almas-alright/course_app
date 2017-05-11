<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    
    public function scopeVal($query, $option_name)
    {
        $value = collect($query->where('option_name', $option_name)->first());
        return $value['option_value'];
    }

}