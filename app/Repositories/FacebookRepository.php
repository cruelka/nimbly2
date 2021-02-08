<?php

namespace App\Repositories;


class FacebookRepository
{
    private $facebook;


    public function __construct()
    {
        $this->facebook = [
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v9.0',
        ];
    }

    public function index()
    {
        try {
            $response = $this->facebook->get('/me?fields=id,name', env('TOKEN2'));
        } catch(\Exception $e) {
            return $e->getMessage();
        }

    }
}
