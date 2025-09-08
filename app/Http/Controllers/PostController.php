<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Profile $profile, Post $post) {
        
        $post->load([
            'replies' => fn($q) => $q
                ->withCount(['likes', 'replies', 'reposts'])
                ->with([
                    'profile', 
                    'parent.profile',
                    'replies' => fn($q) => $q
                    ->withCount(['likes', 'replies', 'reposts'])
                    ->with(['profile', 'parent.profile'])
                    ->oldest()
                ])
                ->oldest()
        ])->loadCount(['likes', 'replies', 'reposts']);

        return view('posts.show', compact('post'));
    }
}
