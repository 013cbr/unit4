<?php

namespace Unit4\Tests\Repository;

use PHPUnit_Framework_TestCase;
use Prophecy\Argument;
use Unit4\ApiClient;
use Unit4\Configuration;
use Unit4\Query\Expression\OrderBy;
use Unit4\Repository\OrderInfoListRepository;

class OrderInfoListRepositoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testWithoutCriteria()
    {
        $query = [
            '$top' => 5,
            '$orderby' => 'OrderDate desc',
        ];

        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(
            Argument::exact('apiroute'),
            Argument::exact(99),
            Argument::exact($query)
        )->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->willReturn('apiroute')->shouldBeCalled();

        $repository = new OrderInfoListRepository($configuration->reveal(), $apiClient->reveal());
        $repository->findByCustomerId(99, []);
    }

    /**
     * @throws \Exception
     */
    public function testWithLimitAndOrderBy()
    {
        $query = [
            '$top'     => 24,
            '$orderby' => 'Email asc, OrderDate desc',
        ];

        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(
            Argument::exact('apiroute'),
            Argument::exact(99),
            Argument::exact($query)
        )->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->willReturn('apiroute')->shouldBeCalled();

        $repository = new OrderInfoListRepository($configuration->reveal(), $apiClient->reveal());
        $repository->findByCustomerId(
            99,
            ['limit' => 24],
            ['Email' => OrderBy::SORT_ORDER_ASC, 'OrderDate' => OrderBy::SORT_ORDER_DESC]
        );
    }
}