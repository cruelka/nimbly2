<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Class PostRepository
 * @package App\Repositories
 */
class PostRepository
{
    /**
     * @return array
     */
    public function index()
    {
        return Post::all()->toArray();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Post::find($id);
    }

    /**
     * @param Post $post
     * @param array $data
     * @return bool
     */
    public function update(Post $post, $data)
    {
        return $post->update($data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return Post::create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return Post::find($id)->delete();
    }
}
