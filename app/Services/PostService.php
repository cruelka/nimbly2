<?php


namespace App\Services;


use App\Repositories\PostRepository;

class PostService
{
    private $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function show($id)
    {
        $post = $this->repository->show($id);
        if ($post) {
            return $post->toArray();
        }
        return 'not found';
    }

    public function update($id, $data)
    {
        $post = $this->repository->show($id);
        if ($post) {
            $updated = $this->repository->update($post, $data);
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
        $post = $this->repository->show($id);
        if ($post) {
            $deleted = $this->repository->destroy($id);
            if ($deleted) {
                return 'deleted';
            }
            return 'something went wrong';
        }
        return 'post not found';
    }
}
