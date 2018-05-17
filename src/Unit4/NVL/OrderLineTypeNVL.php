<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class OrderLineTypeNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'OrderLineTypeNVL';

    public function findAll()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX)
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}