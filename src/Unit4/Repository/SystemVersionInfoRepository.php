<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

class SystemVersionInfoRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'SystemVersionInfo';

    public function find()
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiUri() . 'api/' . static::API_SUFFIX     // XXX: this URI does NOT need the database
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
