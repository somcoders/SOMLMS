<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function chapters()
    {
        return $this->hasMany(Lesson::class)->section();
    }

     public function instructor()
     {
         return $this->belongsTo(User::class, 'instructor_id');
     }

      public function students()
      {
          return $this->belongsToMany(User::class, 'enrollments')->withTimestamps();
      }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

}
