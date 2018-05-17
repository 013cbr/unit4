<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class CostUnitNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'CostUnitNVL';

    /**
     * CostUnitNVL: returns all costUnits set in Unit4
     *
     * @return array List of costUnits
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
