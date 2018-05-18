<?php

namespace Unit4\Tests\Repository;

use PHPUnit_Framework_TestCase;
use Prophecy\Argument;
use Unit4\ApiClient;
use Unit4\Configuration;
use Unit4\Repository\CustomerInfoListRepository;

class CustomerInfoListRepositoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testWithoutCriteria()
    {
        $query = [];

        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(Argument::exact('apiroute'), Argument::exact(null), Argument::exact($query))->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->willReturn('apiroute')->shouldBeCalled();

        $repository = new CustomerInfoListRepository($configuration->reveal(), $apiClient->reveal());
        $repository->findBy();
    }

    /**
     * @throws \Exception
     */
    public function testCriteriaWithCocOnly()
    {
        $query = [
            '$filter' => "CocRegistration eq '12345678'",
        ];

        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(Argument::exact('apiroute'), Argument::exact(null), Argument::exact($query))->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->willReturn('apiroute')->shouldBeCalled();

        $repository = new CustomerInfoListRepository($configuration->reveal(), $apiClient->reveal());
        $repository->findBy(['kvk' => 12345678]);
    }

    /**
     * @throws \Exception
     */
    public function testCriteriaWithEmailOnly()
    {
        $query = [
            '$filter' => "tolower(Email) eq 'aaa@domain.com'",
        ];

        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(Argument::exact('apiroute'), Argument::exact(null), Argument::exact($query))->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->willReturn('apiroute')->shouldBeCalled();

        $repository = new CustomerInfoListRepository($configuration->reveal(), $apiClient->reveal());
        $repository->findBy(['email' => 'aaa@domain.com']);
    }

    /**
     * @throws \Exception
     */
    public function testCriteriaWithEmailAndCoc()
    {
        $query = [
            '$filter' => "tolower(Email) eq 'aaa@domain.com' or CocRegistration eq '12345678'",
        ];

        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(Argument::exact('apiroute'), Argument::exact(null), Argument::exact($query))->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->willReturn('apiroute')->shouldBeCalled();

        $repository = new CustomerInfoListRepository($configuration->reveal(), $apiClient->reveal());
        $repository->findBy(['kvk' => 12345678, 'email' => 'aaa@domain.com']);
    }
}