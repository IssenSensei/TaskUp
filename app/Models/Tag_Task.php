<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_Task extends Model
{
    use HasFactory;

    public function tag()
    {
        return $this->hasOne(Tag::class);
    }
    public function task()
    {
        return $this->hasOne(Task::class);
    }
}
