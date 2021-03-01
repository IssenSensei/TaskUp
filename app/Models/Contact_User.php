<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_User extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
