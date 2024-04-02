<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

      // course
      function rel_to_course(){
        return $this->belongsTo(course::class, 'course_id');
    }
}
