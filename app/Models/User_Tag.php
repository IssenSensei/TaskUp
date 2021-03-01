<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Tag extends Model
{
    use HasFactory;

    public function tag()
    {
        return $this->hasOne(Tag::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
