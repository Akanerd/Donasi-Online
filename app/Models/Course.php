<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorycourse_id', 'title', 'description', 'thumbnail'
    ];

    public function categorycourse()
    {
        return $this->belongsTo(CategoryCourse::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/courses/' . $value),
        );
    }
}
