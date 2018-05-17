<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class PaymentConditionNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'PaymentConditionNVL';

    public function findAll()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX)
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}