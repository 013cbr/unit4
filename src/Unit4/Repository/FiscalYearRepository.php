<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

class FiscalYearRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'FiscalYearInfoList';

    public function getInfoList()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX)
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
