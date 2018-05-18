<?php
namespace Unit4\Repository;

use Unit4\AbstractApiEndpoint;
use Unit4\Query\QueryBuilder;

class CustomerInfoListRepository extends AbstractApiEndpoint
{
    const API_SUFFIX = 'CustomerInfoList';

    public function findBy($criteria = [])
    {
        $query = $this->buildQuery($criteria);

        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            null,
            $query
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }

    private function buildQuery($criteria = [])
    {
        $qb = new QueryBuilder();

        if (!empty($criteria['email'])) {
            $qb->orWhere(
                $qb->expr()->eq($qb->expr()->lower('Email'), $qb->expr()->literal($criteria['email']))
            );
        }

        if (!empty($criteria['kvk'])) {
            $qb->orWhere(
                $qb->expr()->eq('CocRegistration', $qb->expr()->literal((string)$criteria['kvk']))
            );
        }

        return $qb->getQuery();
    }
}
