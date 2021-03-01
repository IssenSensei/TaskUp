<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation_User extends Model
{
    use HasFactory;

    public function conversation()
    {
        return $this->hasOne(Conversation::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
