<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

class ProductInfoListRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'ProductInfoList';

    public function findByCode($code)
    {
        if (empty($code)) {
            throw new Exception('Artikelcode ontbreekt');
        }
        $query = ['$filter' => "tolower(ProductId) eq '" . strtolower($code) . "'"];

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            null,
            $query
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}
