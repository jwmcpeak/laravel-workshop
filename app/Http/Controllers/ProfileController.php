<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Post;

use Illuminate\Http\Request;

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
}
