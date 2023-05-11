<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePost extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_desc',
        'full_desc',
        'author',
        'is_active',
    ];

    public function getImageAttribute($value)
    {
        if(!$value)
        {
            return url("images/user-placeholder.png");
        }
        return url($value);
    }
}
