<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'thumbnail'
    ];

    public function courses() 
    {
        return $this->hasMany(Course::class);
    }
}
