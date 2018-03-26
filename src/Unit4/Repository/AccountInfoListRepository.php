<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

class AccountInfoListRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'AccountInfoList';

    public function get($year = 0)
    {
        if (empty($year)) {
            $year = date('Y');
        }

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX) . $year
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
