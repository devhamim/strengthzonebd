<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;


    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany(blog::class);
    }
}
