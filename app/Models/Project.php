<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'category_id',
        'name',
        'description',
        'thumbnail',
        'total_views',
        'is_featured',
        'is_trending',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
