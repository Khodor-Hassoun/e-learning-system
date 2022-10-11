<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Course extends Eloquent
{
    use HasFactory;
    protected $casts = [
        'intstructors' => 'array',
        'students' => 'array',
        'assignments' => 'array',
    ];
    protected $fillable = [
        'name',
        'instructors',
        'students'
    ];
    public function instructorz()
    {
        return $this->hasMany(User::class, 'email','instructors');
    }
}
