<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dev/login', function() {
    $user = User::inRandomOrder()->first();

    Auth::login($user);
    request()->session()->regenerate();

    return redirect()->intended(route('profiles.show', $user->profile));
});

Route::get('/dev/logout', function() {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->intended('/feed');
});



Route::get('/feed', function() {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'content' => <<<str
            <p>
            I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
        </p>
        <img src="/images/simon-chilling.png" alt="" />
str,
            'likeCount' => 23,
            'replyCount' => 45,
            'repostCount' => 151,
            'profile' => [
                'avatar' => '/images/michael.png',
                'displayName' => 'Michael',
                'handle' => '@mmich_jj',
            ],
            'replies' => [
                [
                    'content' => '<p>Heh — this looks just like me!</p>',
                    'postedDateTime' => '1h',
                    'likeCount' => 52,
                    'replyCount' => 12,
                    'repostCount' => 200,
                    'profile' => [
                        'avatar' => '/images/simon-chilling.png',
                        'displayName' => 'Simon',
                        'handle' => '@simonswiss',
                    ],
                ]
            ]
        ]
    ]));


    return view('feed', compact('feedItems'));
});

Route::get('/profile', function() {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'content' => <<<str
            <p>
            I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
        </p>
        <img src="/images/simon-chilling.png" alt="" />
str,
            'likeCount' => 23,
            'replyCount' => 45,
            'repostCount' => 151,
            'profile' => [
                'avatar' => '/images/michael.png',
                'displayName' => 'Michael',
                'handle' => '@mmich_jj',
            ],
            'replies' => [
                [
                    'content' => '<p>Heh — this looks just like me!</p>',
                    'postedDateTime' => '1h',
                    'likeCount' => 52,
                    'replyCount' => 12,
                    'repostCount' => 200,
                    'profile' => [
                        'avatar' => '/images/simon-chilling.png',
                        'displayName' => 'Simon',
                        'handle' => '@simonswiss',
                    ],
                ]
            ]
        ]
    ]));

    return view('profile', compact('feedItems'));
});

Route::get('/{profile:handle}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/{profile:handle}/with_replies', [ProfileController::class, 'replies'])->name('profiles.replies');

Route::scopeBindings()->group(function() {
    Route::get('/{profile:handle}/status/{post}', [PostController::class, 'show'])->name('posts.show');
});