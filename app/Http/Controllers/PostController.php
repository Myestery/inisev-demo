<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatePost;
use App\Repositories\PostRepository;

class PostController extends Controller
{

    protected $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create(CreatePost $request)
    {
        $post = $this->postRepository->create($request->all());
        return response()->json($post, 201);
    }
}
