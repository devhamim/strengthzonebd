<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    // feature
    function rel_to_feature(){
        return $this->belongsTo(feature::class, 'feature_id');
    }
    // feature
    function rel_to_user(){
        return $this->belongsTo(User::class, 'added_by');
    }
}
