<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;
use Unit4\Query\Expression\OrderBy;
use Unit4\Query\QueryBuilder;

class OrderInfoListRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'OrderInfoList';

    /**
     * OrderInfoList: Fetches 5 most recent orders for a specific customer
     *
     * @param integer $id The ID of the Customer in Unit4
     * @param array $criteria
     * @return array
     * @throws \Exception
     */
    public function findByCustomerId($id, $criteria = [], $orderBy = [])
    {
        $query = $this->buildQuery($criteria, $orderBy);

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            $id,
            $query
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }

    protected function buildQuery($criteria = [], $orderBy = [])
    {
        $qb = new QueryBuilder();
        $qb->setMaxResults(5);
        $qb->addOrderBy('OrderDate', OrderBy::SORT_ORDER_DESC);

        if (!empty($criteria['limit'])) {
            $qb->setMaxResults($criteria['limit']);
        }

        if (!empty($orderBy)) {
            $qb->resetOrderBy();
            foreach ($orderBy as $key => $sortOrder) {
                $qb->addOrderBy($key, $sortOrder);
            }
        }

        return $qb->getQuery();
    }
}
