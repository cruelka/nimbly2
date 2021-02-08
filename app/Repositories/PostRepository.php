<?php


namespace App\Repositories;


use App\Models\Post;

class PostRepository
{
    public function index()
    {
        return Post::all()->toArray();












    }
    public function show($id)
    {
        return Post::find($id);
    }
    public function update(Post $post, $data)
    {
        return $post->update($data);
    }
    public function store($data)
    {
        return Post::create($data);
    }
    public function destroy($id)
    {
        return Post::find($id)->delete();
    }
}
