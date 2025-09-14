<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Queries\TimelineQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $profile = Auth::user()->profile;

        $posts = TimelineQuery::forViewer($profile)->get();

        return view('posts.index', compact('posts'));
    }


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
