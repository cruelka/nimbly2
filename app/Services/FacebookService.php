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

    public function getPages()
    {
        return $this->repository->getPages();
    }

    public function getTopHashtags()
    {
        return $this->repository->getTopHashtags();
    }
}
