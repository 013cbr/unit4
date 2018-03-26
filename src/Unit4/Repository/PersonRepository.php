<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

class PersonRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'Person';

    public function get($id)
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX) . $id
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
