<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class ProductNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'ProductNVL';

    public function get()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX)
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
