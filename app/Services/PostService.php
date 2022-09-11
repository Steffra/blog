<?php

namespace App\Services;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class PostService
{
    public function __construct()
    {
    }

    public function getPostFeed(): Collection
    {
        $posts = Post::orderBy('published_at', 'desc')->with('user')->get();
        foreach ($posts as &$post) {
            $post->is_deletable = $this->isPostDeletable($post);
        }
        return $posts;
    }

    public function publishNewPost(StorePostRequest $request): void
    {
        date_default_timezone_set('Europe/Vienna');
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'published_at' => date('Y-m-d H:i:s'),
            'user_id' => Auth::user()->id
        ]);
    }

    public function deletePost(Post $post): void
    {
        if ($this->isPostDeletable($post)) {
            $post->delete();
        }
    }

    private function isPostDeletable(Post $post): bool
    {
        $currentUser = Auth::user();
        return $currentUser->is_admin || $currentUser->id === $post->user_id;
    }

    public function getPostWithDeletability(Post &$post): Post
    {
        $post->is_deletable = $this->isPostDeletable($post);
        return $post;
    }
}
