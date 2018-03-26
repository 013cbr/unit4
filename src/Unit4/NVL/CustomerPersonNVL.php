<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class CustomerPersonNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'CustomerPersonNVL';

    // todo: add documentation. Does it return persons or customers? Etc.
    public function find($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException('ID ontbreekt');
        }

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX) . $id
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
