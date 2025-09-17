<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\Profile;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Profile $profile) {

        $profile->loadCount(['followings', 'followers']);

        $posts = Post::where('profile_id', $profile->id)
            ->whereNull('parent_id')
            ->with(
                ['repostOf' => fn($q) => $q->withCount(['likes', 'reposts', 'replies'])]
            )
            ->withCount(['likes', 'reposts', 'replies'])
            ->latest()
            ->get();


        return view('profiles.show', compact('profile', 'posts'));
    }

    public function replies(Profile $profile) {

        $profile->loadCount(['followings', 'followers']);

        $posts = Post::query()
            ->where(fn($q) => $q
                ->whereBelongsTo($profile, 'profile')
                ->whereNull('parent_id')
            )
            ->orWhereHas('replies', fn($q) => $q
                ->whereBelongsTo($profile, 'profile')
            )
            ->with([
                'profile',
                'repostOf' => fn($q) => $q->withCount(['likes', 'reposts', 'replies']),
                'repostOf.profile',
                'parent.profile',
                'replies' => fn($q) => $q
                    ->whereBelongsTo($profile, 'profile')
                    ->with('profile')
                    ->oldest()
            ])
            ->withCount(['likes', 'reposts', 'replies'])
            ->latest()
            ->get();


        return view('profiles.replies', compact('profile', 'posts'));
    }

    public function follow(Profile $profile) {
        $currentProfile = Auth::user()->profile;

        $follow = Follow::createFollow($currentProfile, $profile);

        return response()->json(compact('follow'));
    }
}
