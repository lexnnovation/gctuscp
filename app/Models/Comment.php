<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment', 'student_id', 'project_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
