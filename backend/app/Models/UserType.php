<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class UserType extends Eloquent
{
    use HasFactory;
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
