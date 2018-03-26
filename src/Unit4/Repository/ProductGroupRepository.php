<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;
use Exception;

class ProductGroupRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'ProductGroup';

    public function get($id)
    {
        if (empty($id)) {
            throw new Exception('Product ID ontbreekt');
        }

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            $id
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
