<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class AccountNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'AccountNVL';

    /**
     * AccountNVL: returns all accounts ("grootboekrekeningen") for a specific year
     *
     * @param int $year Year in 4-digit format. Uses the current year if left empty
     *
     * @return mixed
     * @throws \Exception
     */
    public function findByYear($year = null)
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
