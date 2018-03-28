<?php

namespace Unit4\Tests;

use Prophecy\Argument;
use GuzzleHttp\Psr7\Response;
use Unit4\ApiClient;

class ApiClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Prophecy\Prophet
     */
    private $prophet;

    public function testRequest()
    {
        $responseBody = 'responseContentText';
        $response = new Response(
            \Symfony\Component\HttpFoundation\Response::HTTP_OK,
            [],
            $responseBody
        );

        $accessToken = uniqid();
        $url = 'someUrl';

        $client = $this->prophet->prophesize('GuzzleHttp\Client');
        $client->request(
            'GET',
            $url,
            Argument::any()
        )->shouldBeCalled()->willReturn($response);

        $apiClient = new ApiClient($client->reveal(), $accessToken);

        $this->assertEquals($responseBody, $apiClient->request($url));
    }

    protected function setup()
    {
        $this->prophet = new \Prophecy\Prophet();
    }

    protected function tearDown()
    {
        $this->prophet->checkPredictions();
    }
}