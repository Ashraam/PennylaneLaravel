<?php

namespace Ashraam\PennylaneLaravel\Api;

class Enums extends BaseApi
{
    /**
     * Retrieve enums by it's ID
     *
     * @param string $id
     * @param string $locale
     * @return array
     */
    public function get(string $id, $locale = 'en')
    {
        $response = $this->client->request('get', "enums/{$id}", [
            'query' => [
                'locale' => $locale
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
