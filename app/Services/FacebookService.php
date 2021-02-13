<?php

namespace App\Services;

use App\Models\Hashtag;
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
    public function getHashtagsIds($data)
    {
        $output = [];
        foreach ($data['hashtags'] as $hashtag) {
            $model = Hashtag::where('name', $hashtag['name'])->get();
            if ($model->isEmpty()) {
                $id = $this->repository->queryHashtag($hashtag['name']);
                $output []= [
                  'name' => $hashtag['name'],
                  'ig_id'=> $id['id']
                ];
            }

        }
        return $output;
    }
}
