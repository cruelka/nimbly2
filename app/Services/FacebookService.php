<?php

namespace App\Services;

use App\Repositories\FacebookRepository;

/**
 * Class FacebookService
 * @package App\Services
 */
class FacebookService
{
    /**
     * @var FacebookRepository
     */
    private $repository;

    /**
     * FacebookService constructor.
     * @param FacebookRepository $facebookRepository
     */
    public function __construct(FacebookRepository $facebookRepository)
    {
        $this->repository = $facebookRepository;
    }

    /**
     * @return mixed|string
     */
    public function getPages()
    {
        return $this->repository->getPages();
    }

    /**
     * @return mixed|string
     */
    public function getTopHashtags()
    {
        return $this->repository->getTopHashtags();
    }

    /**
     * @param array $hashtags
     */
    public function getHashtagsIds(array $hashtags)
    {
        $output = [];

        dd($hashtags);
    }
}
