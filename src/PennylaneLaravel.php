<?php

namespace Ashraam\PennylaneLaravel;

use GuzzleHttp\ClientInterface;
use Ashraam\PennylaneLaravel\Api\Enums;
use Ashraam\PennylaneLaravel\Api\Invoices;
use Ashraam\PennylaneLaravel\Api\Products;
use Ashraam\PennylaneLaravel\Api\Customers;
use Ashraam\PennylaneLaravel\Api\Estimates;

class PennylaneLaravel
{
    protected $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function me()
    {
        $response = $this->client->request('get', 'me');

        return json_decode($response->getBody()->getContents(), true);
    }

    public function customers()
    {
        return new Customers($this->client);
    }

    public function products()
    {
        return new Products($this->client);
    }

    public function invoices()
    {
        return new Invoices($this->client);
    }

    public function estimates()
    {
        return new Estimates($this->client);
    }

    public function enums()
    {
        return new Enums($this->client);
    }
}
