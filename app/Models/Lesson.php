<?php

namespace App\Models;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'parent_id');
    }

      public function chapter()
      {
          return $this->belongsTo(Lesson::class, 'parent_id');
      }
}
