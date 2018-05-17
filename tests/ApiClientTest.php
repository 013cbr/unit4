<?php

namespace Unit4\Tests;

use PHPUnit_Framework_TestCase;
use Prophecy\Argument;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\StreamInterface;
use Unit4\ApiClient;

class ApiClientTest extends PHPUnit_Framework_TestCase
{
    /**
     * Tests whether the apiclient returns a valid body (not the whole response)
     *
     * @throws \Exception
     */
    public function testRequestReturnsValidBody()
    {
        $responseBody = 'responseContentText';
        $response = new Response(
            \Symfony\Component\HttpFoundation\Response::HTTP_OK,
            [],
            $responseBody
        );

        $accessToken = uniqid();
        $url = 'someUrl';

        $client = $this->prophesize(\GuzzleHttp\Client::class);
        $client->request(
            'GET',
            $url,
            Argument::any()
        )->shouldBeCalled()->willReturn($response);

        $apiClient = new ApiClient($client->reveal(), $accessToken);

        $this->assertEquals($responseBody, $apiClient->request($url));
        $this->assertEquals(true, $apiClient->request($url) instanceof StreamInterface);
    }

    /**
     * Make sure the apiclient throws an exception whenever the response is invalid
     *
     * @throws \Exception
     */
    public function testRequestThrowsException()
    {
        $response = new Response(
            \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST,
            [],
            'responseContentText'
        );

        $accessToken = uniqid();
        $url = 'someUrl';

        $client = $this->prophesize(\GuzzleHttp\Client::class);
        $client->request(
            'GET',
            $url,
            Argument::any()
        )->shouldBeCalled()->willReturn($response);

        $apiClient = new ApiClient($client->reveal(), $accessToken);

        $this->expectException(\Exception::class);

        $apiClient->request($url);
    }
}
