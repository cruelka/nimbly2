<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class FacebookRepository
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = new $client(
            [
                'base_uri' => env('FACEBOOK_API_URL').env('FACEBOOK_API_VERSION'),
                'headers'  => [
                    'Authorization' => 'Bearer '.env('TOKEN'),
                ],
            ]
        );
    }

    public function getPages()
    {
        try {
            $response = $this->client->get('me/accounts?fields=name,category_list,instagram_business_account{name}');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return json_decode($response->getBody(),  true);
    }

    public function getTopHashtags()
    {
        try {
            $response = $this->client->get('17841400192782903/media?fields=caption,id,ig_id');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return json_decode($response->getBody(),  true);
    }
}
