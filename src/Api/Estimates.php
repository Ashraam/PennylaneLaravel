<?php

namespace Ashraam\PennylaneLaravel\Api;

class Estimates extends BaseApi
{
    /**
     * List all estimates
     *
     * @param array $filters
     * @return array
     */
    public function list(array $filters = [])
    {
        $response = $this->client->request('get', "customer_estimates", [
            'query' => [
                'filter' => json_encode($filters)
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Create a new estimate
     *
     * @param array $data
     * @param boolean $create_customer
     * @param boolean $create_products
     * @return array
     */
    public function create(array $data, bool $create_customer = false, bool $create_products = false)
    {
        $response = $this->client->request('post', "customer_estimates", [
            'json' => [
                'create_customer' => $create_customer,
                'create_products' => $create_products,
                'estimate' => $data
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }


    /**
     * Retrieve an estimate by it's ID
     *
     * @param string $id
     * @return array
     */
    public function get(string $id)
    {
        $response = $this->client->request('get', "customer_estimates/{$id}");

        return json_decode($response->getBody()->getContents(), true);
    }
}
