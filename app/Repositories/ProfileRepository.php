<?php

namespace App\Repositories;

use App\Models\Profile;

/**
 * Class ProfileRepository
 * @package App\Repositories
 */
class ProfileRepository
{
    /**
     * @return array
     */
    public function index()
    {
        return Profile::with('user')->paginate(5)->toArray();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Profile::find($id);
    }

    /**
     * @param Profile $post
     * @param array $data
     * @return bool
     */
    public function update(Profile $post, $data)
    {
        return $post->update($data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function store($data)
    {
        return Profile::create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return Profile::find($id)->delete();
    }
}

