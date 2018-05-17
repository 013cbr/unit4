<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class OrderStateNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'OrderStateNVL';

    public function findAll()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX)
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
