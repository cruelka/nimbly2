<?php

namespace App\Services;

use App\Repositories\FacebookRepository;

class FacebookService
{
    private $repository;

    public function __construct(FacebookRepository $facebookRepository)
    {
        $this->repository = $facebookRepository;
    }
    public function facebook()
    {
        return $this->repository->index();

    }
}
