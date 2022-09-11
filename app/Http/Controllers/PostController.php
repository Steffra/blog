<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function __construct(private PostService $postService)
    {
    }

    public function index()
    {
        return view('posts.index', ['posts' => $this->postService->getPostFeed()]);
    }

    public function create()
    {
        return view('posts.create', ['posts' => $this->postService->getPostFeed()]);
    }

    public function store(StorePostRequest $request)
    {
        $this->postService->publishNewPost($request);
        return $this->index();
    }

    public function show(Post $post)
    {
        return view('posts.post', ['post' => $this->postService->getPostWithDeletability($post)]);
    }

    public function destroy(Post $post)
    {
        $this->postService->deletePost($post);
        return $this->index();
    }
}
