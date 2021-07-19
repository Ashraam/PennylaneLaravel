<?php

namespace Ashraam\PennylaneLaravel\Api;

class Products extends BaseApi
{
    /**
     * List all products
     *
     * @return array
     */
    public function list()
    {
        $response = $this->client->request('get', "products");

        return json_decode($response->getBody()->getContents(), true);
    }


    /**
     * Create a new product
     *
     * @param array $data
     * @return array
     */
    public function create(array $data)
    {
        $response = $this->client->request('post', "products", [
            'json' => [
                'product' => $data
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }


    /**
     * Retrieve a product by it's ID
     *
     * @param string $id
     * @return array
     */
    public function get(string $id)
    {
        $response = $this->client->request('get', "products/{$id}");

        return json_decode($response->getBody()->getContents(), true);
    }


    /**
     * Update a product by it's ID
     *
     * @param string $id
     * @param array $data
     * @return array
     */
    public function update(string $id, array $data)
    {
        $response = $this->client->request('put', "products/{$id}", [
            'json' => [
                'product' => $data
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
