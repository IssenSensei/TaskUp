<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'localization', 'pay', 'repeat_until'];

    public function taskStatus()
    {
        return $this->belongsTo(TaskStatus::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function cyclicType()
    {
        return $this->belongsTo(CyclicType::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_user_id');
    }

    public function executor()
    {
        return $this->belongsTo(User::class, 'executor_user_id');
    }
}
