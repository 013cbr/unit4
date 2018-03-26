<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;

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
    public function find($id, $criteria = [])
    {
        $query = $this->buildQuery($criteria);

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            $id,
            $query
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }

    protected function buildQuery($criteria = [])
    {
        $query = [
            '$orderby' => "OrderDate desc",
            '$top' => 5,            // todo: make this flexible
        ];

        if (!empty($criteria['limit'])) {
            $query['$top'] = $criteria['limit'];
        }

        if (!empty($criteria['orderby'])) {
            $query['$orderby'] = $criteria['orderby'];
        }

        return $query;
    }
}
