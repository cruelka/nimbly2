<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FacebookPageResource;
use App\Http\Resources\FacebookPostResource;
use App\Services\FacebookService;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    private $facebook;

    public function __construct(FacebookService $facebookService)
    {
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
}
