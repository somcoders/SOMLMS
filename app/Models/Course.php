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

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

}
