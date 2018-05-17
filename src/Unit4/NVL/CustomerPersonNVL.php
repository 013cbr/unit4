<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class CustomerPersonNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'CustomerPersonNVL';

    /**
     * Gets a name/value list of CustomerPersonNVL
     *
     * @param int $id The Customer ID
     *
     * @return mixed
     * @throws \Exception
     */
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
