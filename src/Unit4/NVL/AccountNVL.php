<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class AccountNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'AccountNVL';

    public function get($year = 0)
    {
        if (empty($year)) {
            $year = date('Y');
        }

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX) . '?fiscalYear=' . $year
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
