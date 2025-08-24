<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'parent_id',
        'repost_of_id',
        'content'
    ];

    public function profile() : BelongsTo {
        return $this->belongsTo(Profile::class);
    }

    public function parent() : BelongsTo {
        return $this->belongsTo(Post::class, 'parent_id');
    }

    public function replies() : HasMany {
        return $this->hasMany(Post::class, 'parent_id');
    }

    public function likes() : HasMany {
        return $this->hasMany(Like::class);
    }

    public function reposts() : HasMany {
        return $this->hasMany(Post::class, 'repost_of_id');
    }

    public function repostOf() : BelongsTo {
        return $this->belongsTo(Post::class, 'repost_of_id');
    }

    public static function publish(Profile $profile, string $content) : self {
        return static::create([
            'profile_id'=> $profile->id,
            'content' => $content,
            'parent_id' => null,
            'repost_of_id' => null,
        ]);
    }

    public static function reply(Profile $profile, Post $original, string $content) : self {
        return static::create([
            'profile_id'=> $profile->id,
            'content' => $content,
            'parent_id' => $original->id,
            'repost_of_id' => null,
        ]);
    }

    public static function repost(Profile $profile, Post $original, string $content = null) : self {
        return static::create([
            'profile_id'=> $profile->id,
            'content' => $content,
            'parent_id' => null,
            'repost_of_id' => $original->id,
        ]);
    }
}
