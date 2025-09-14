<?php

namespace App\View\Components;

use Closure;
use App\Models\Post as PostModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Post extends Component
{
    private PostModel $original;
    /**
     * Create a new component instance.
     */
    public function __construct(
            public PostModel $post,
            public bool $showEngagement = true,
            public bool $showReplies = false
        )
    {
        $this->original = $post;
        $this->post = $post->isRepost() && $post->content == null ? $post->repostOf : $post;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post');
    }
}
