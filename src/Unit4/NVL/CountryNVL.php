<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class CountryNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'CountryNVL';

    /**
     * CountryNVL: returns all countries specified in Unit4
     *
     * @return array List of Countries specified in Unit4
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
