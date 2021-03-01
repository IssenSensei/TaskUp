<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'is_resolved', 'related_record_id'];

    public function notificationType()
    {
        return $this->belongsTo(NotificationType::class);
    }

    public function notifier()
    {
        return $this->belongsTo(User::class, 'notifier_user_id');
    }

    public function notified()
    {
        return $this->belongsTo(User::class, 'notified_user_id');
    }
}
