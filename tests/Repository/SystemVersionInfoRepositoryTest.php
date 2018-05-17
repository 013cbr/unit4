<?php

namespace Unit4\Tests\Repository;

use PHPUnit_Framework_TestCase;
use Prophecy\Argument;
use Prophecy\Prophet;
use Unit4\ApiClient;
use Unit4\Configuration;
use Unit4\Repository\VersionRepository;

class SystemVersionInfoRepositoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * The get-function does not need the database, so it should use getApiUri instead of getApiRoute
     *
     * @throws \Exception
     */
    public function testGetDoesNotUseApiRoute()
    {
        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(Argument::type('string'))->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiUri()->shouldBeCalledTimes(1);
        $configuration->getApiRoute(Argument::any())->shouldNotBeCalled();

        $repository = new VersionRepository($configuration->reveal(), $apiClient->reveal());
        $repository->find();
    }
}