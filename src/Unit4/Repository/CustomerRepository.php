<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;
use Unit4\Entity\CustomerEntity;
use GeneratedHydrator\Configuration;

class CustomerRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'Customer';

    /**
     * Fetch a customer from Unit4, by ID
     *
     * @param int $id
     *
     * @return CustomerEntity
     * @throws \Exception
     */
    public function find($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException('ID ontbreekt');
        }

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            $id
        );

        $decodedResponse = json_decode($response, true);

        $config = new Configuration('Unit4\Entity\CustomerEntity');
        $hydratorClass = $config->createFactory()->getHydratorClass();
        $hydrator = new $hydratorClass();

        $customer = new CustomerEntity();
        $hydrator->hydrate(
            $decodedResponse,
            $customer
        );

        return $customer;
    }
}
