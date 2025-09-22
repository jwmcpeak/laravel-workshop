<?php

namespace App\Queries;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ProfileWithRepliesQuery {

    public function __construct(
        private Profile $subject,
        private ?Profile $viewer) {}

    public static function for(Profile $subject, ?Profile $viewer) : self {
        return new self($subject, $viewer);
    }

    public function paginate(int $perPage = 20) : LengthAwarePaginator {
        return $this->baseQuery()->paginate($perPage)->through(fn ($p) => $this->normalize($p));
    }

    public function get() : Collection {
        return $this->baseQuery()->get()->map(fn($p) => $this->normalize($p));
    }

    private function baseQuery() : Builder {
        $viewerId = $this->viewer?->id ?? 0;
        
        $posts = Post::query()
            ->where(fn($q) => $q
                ->whereBelongsTo($this->subject, 'profile')
                ->whereNull('parent_id')
            )
            ->orWhereHas('replies', fn($q) => $q
                ->whereBelongsTo($this->subject, 'profile')
            )
            ->with([
                'profile',
                'repostOf' => fn($q) => $q
                    ->withCount(['likes', 'reposts', 'replies'])
                    ->with('profile'),
                'repostOf.profile',
                'parent.profile',
                'replies' => fn($q) => $q
                    ->whereBelongsTo($this->subject, 'profile')
                    ->with('profile')
                    ->oldest()
            ])
            ->withCount(['likes', 'reposts', 'replies'])
            ->withExists([
                'likes as has_liked' => fn($q) => $q->where('profile_id', $viewerId),
                'reposts as has_reposted' => fn($q) => $q->where('profile_id', $viewerId),
                'repostOf as like_original' => fn($q) =>
                    $q->whereHas('likes', fn($q) => $q->where('profile_id', $viewerId)),
                'repostOf as repost_original' => fn($q) =>
                    $q->whereHas('reposts', fn($q) => $q->where('profile_id', $viewerId)),
            ])
            ->latest();

            return $posts;
    }

    private function normalize(Post $post) : Post {
        if ($post->isRepost() && is_null($post->content)) {
            $post->repostOf->has_liked = (bool) $post->like_original;
            $post->repostOf->has_reposted = (bool) $post->repost_original;
        }

        return $post;
    }
}