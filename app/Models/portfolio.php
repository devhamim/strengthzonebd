<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // feature
    function rel_to_feature(){
        return $this->belongsTo(feature::class, 'feature_id');
    }
}
