<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;

    protected $fillable = [
        // 'name',
        'display_name',
        'handle',
        'bio',
        'avatar_url',
    ];


    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function posts() : HasMany {
        return $this->hasMany(Post::class);
    }

    public function topLevelPosts() : HasMany {
        return $this->hasMany(Post::class)->whereNull('parent_id');
    }
}
