<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    /** @use HasFactory<\Database\Factories\LikeFactory> */
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'post_id',
    ];

    public function profile() : BelongsTo {
        return $this->belongsTo(Profile::class);
    }

    public function post() : BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
