<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hashtag\HashTagGetIdsRequest;
use App\Http\Resources\FacebookPageResource;
use App\Http\Resources\FacebookPostResource;
use App\Http\Resources\HashtagsWithIdResource;
use App\Services\FacebookService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;

class FacebookController extends Controller
{
    private $facebook;

    public function __construct(FacebookService $facebookService)
    {
        $image = 'http://172.27.2.160:9000/test/c10/c108a7d1814a9e8929bfbf46dcf4f761.jpg';

        dd(file_get_contents($image)->getClientOriginalName());

        $this->facebook = $facebookService;
    }

    public function getPages()
    {
        return response(new FacebookPageResource($this->facebook->getPages()));
    }

    public function getTopHashtags()
    {
        return response(new FacebookPostResource($this->facebook->getTopHashtags()));
    }

    public function getHashtagsIds(HashTagGetIdsRequest $request)
    {
        return response(new HashtagsWithIdResource(($this->facebook->getHashtagsIds($request->validated()))));
    }
}
