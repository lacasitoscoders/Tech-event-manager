<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventUser extends Model
{
    public function subscribe($userId = null)
{
    $this->subscriptions()->create([
        'user_id' => $userId ?: auth()->id()
    ]);
    return $this;
}
 
public function subscriptions()
{
    return $this->hasMany(EventUser::class);
}

protected $guarded = [];
 
public function event()
{
    return $this->belongsTo(Event::class);
}
}


