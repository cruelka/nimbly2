<?php

namespace App\Services;

use App\Repositories\ProfileRepository;

class ProfileService
{
    private $repository;

    public function __construct(ProfileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function show($id)
    {
        $profile = $this->repository->show($id);
        if ($profile) {
            return $profile->toArray();
        }
        return 'not found';
    }

    public function update($id, $data)
    {
        $profile = $this->repository->show($id);
        if ($profile) {
            $updated = $this->repository->update($profile, $data);
            if ($updated) {
                return $this->repository->show($id);
            }
            return 'something went wrong';
        }
        return 'not found';
    }
    public function store($data)
    {
        return $this->repository->store($data);
    }
    public function destroy($id)
    {
        $profile = $this->repository->show($id);
        if ($profile) {
            $deleted = $this->repository->destroy($id);
            if ($deleted) {
                return 'deleted';
            }
            return 'something went wrong';
        }
        return 'post not found';
    }
}
