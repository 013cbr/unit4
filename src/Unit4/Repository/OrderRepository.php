<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;
use Unit4\Entity\OrderEntity;
use GeneratedHydrator\Configuration;

class OrderRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'Order';

    public function find($id)
    {
        if (empty($id)) {
            throw new Exception('Order ID ontbreekt');
        }

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            $id
        );

        $decodedResponse = json_decode($response, true);

        $config = new Configuration('Unit4\Entity\OrderEntity');
        $hydratorClass = $config->createFactory()->getHydratorClass();
        $hydrator = new $hydratorClass();

        $order = new OrderEntity();
        $hydrator->hydrate(
            $decodedResponse,
            $order
        );

        return $order;
    }
}
