<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class LanguageNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'LanguageNVL';

    /**
     * LanguageNVL: returns all languages specified in Unit4
     *
     * @return array
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