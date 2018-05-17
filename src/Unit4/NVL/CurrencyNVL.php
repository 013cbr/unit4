<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class CurrencyNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'CurrencyNVL';

    /**
     * CurrencyNVL: returns all currencies set in Unit4
     *
     * @return array List of currencies
     * @throws \Exception
     */
    public function findAll()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX)
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}