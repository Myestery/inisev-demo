<?php

namespace App\Repositories;

use App\Models\Posts;
use App\Events\NewWebsitePost;
use App\Interfaces\PostInterface;



class PostRepository implements PostInterface
{
    public function getAll()
    {
        return Posts::all();
    }

    public function getById($id)
    {
        return Posts::with('website')->find($id);
    }

    public function create(array $attributes)
    {
        $post = Posts::create($attributes);
        NewWebsitePost::dispatch($post);
        return $post;
    }
}
