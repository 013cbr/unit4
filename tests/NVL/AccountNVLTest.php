<?php

namespace Unit4\Tests\Repository;

use PHPUnit_Framework_TestCase;
use Prophecy\Argument;
use Unit4\ApiClient;
use Unit4\Configuration;
use Unit4\NVL\AccountNVL;

class AccountNVLTest extends PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testDefaultsBackToTheCurrentYearWhenNoneIsProvided()
    {
        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(Argument::containingString('fiscalYear=' . date('Y')))->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->shouldBeCalledTimes(1);

        $nvl = new AccountNVL($configuration->reveal(), $apiClient->reveal());
        $nvl->findByYear();
    }

    /**
     * @throws \Exception
     */
    public function testUsesTheProvidedYear()
    {
        $year = '1234';

        /** @var ApiClient $apiClient */
        $apiClient = $this->prophesize(ApiClient::class);
        $apiClient->request(Argument::containingString('fiscalYear=' . $year))->shouldBeCalledTimes(1);

        /** @var Configuration $configuration */
        $configuration = $this->prophesize(Configuration::class);
        $configuration->getApiRoute(Argument::any())->shouldBeCalledTimes(1);

        $nvl = new AccountNVL($configuration->reveal(), $apiClient->reveal());
        $nvl->findByYear($year);
    }
}