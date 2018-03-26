<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

class CustomerInfoListRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'CustomerInfoList';

    // todo: write documentation. Possibly write criteria into a separate object ?
    public function findBy($criteria = [])
    {
        $query = $this->buildQuery($criteria);

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            null,
            $query
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }

    private function buildQuery($criteria = [])
    {
        $query = [];

        if (!empty($criteria['email'])) {     // xxx: use validation to check if it's also a valid email address ?
            $query['$filter'] = "tolower(Email) eq '" . strtolower($criteria['email']) . "'";
        }

        if (!empty($criteria['kvk'])) {
            if (!empty($query['$filter'])) {        // todo: split this off
                $query['$filter'] .= " or ";
            }
            $query['$filter'] .= "CocRegistration eq '" . $criteria['kvk'] . "'";
        }

        return $query;
    }
}
