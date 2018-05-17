<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

class VersionRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'Version';

    public function find()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiUri() . 'api/' . static::API_SUFFIX     // this does NOT need the database
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
