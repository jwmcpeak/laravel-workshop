<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Follow extends Model
{
    /** @use HasFactory<\Database\Factories\FollowFactory> */
    use HasFactory;

    protected $fillable = [
        'follower_profile_id',
        'following_profile_id',
    ];

    public function follower() : BelongsTo {
        return $this->belongsTo(Profile::class, 'follower_profile_id');
    }

    public function following_profile_id() : BelongsTo {
        return $this->belongsTo(Profile::class, 'following_profile_id');
    }
}
