<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    protected $fillable = [
        "name",
        "channel_type"
    ];

    protected $casts = [
        "is_public" => "boolean"
    ];

    // Chanell Users
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    // Channel Owners
    public function owners(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->wherePivot('role', 'owner');
    }

    public function moderators(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->wherePivot('role','moderator');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->wherePivot('role','member');
    }
    
}
