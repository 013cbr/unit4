<?php

namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;
use Unit4\Entity\ProductEntity;
use GeneratedHydrator\Configuration;

class ProductRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'Product';

    /**
     * Fetch a product from Unit4, by ID
     *
     * @param int $id
     *
     * @return ProductEntity
     * @throws \Exception
     */
    public function find($id)
    {
        if (empty($id)) {
            throw new Exception('Product ID ontbreekt');
        }

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            $id
        );

        $decodedResponse = json_decode($response, true);

        $config        = new Configuration('Unit4\Entity\ProductEntity');
        $hydratorClass = $config->createFactory()->getHydratorClass();
        $hydrator      = new $hydratorClass();

        $product = new ProductEntity();
        $hydrator->hydrate(
            $decodedResponse,
            $product
        );

        return $product;
    }
}
