<?php

namespace Unit4;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

class ApiClient
{
    const HEADER_ENCODING_JSON = 'application/json';
    const HEADER_ENCODING_XML  = 'application/xml';          // XXX: be careful, XML handling is not implemented anywhere yet

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $headerEncoding;

    /**
     * ApiClient constructor.
     *
     * @param Client $client
     * @param string $accessToken
     */
    public function __construct(Client $client, $accessToken)
    {
        $this->client      = $client;
        $this->accessToken = $accessToken;

        $this->setHeaderEncoding(static::HEADER_ENCODING_JSON);
    }

    /**
     * @param string $headerEncoding
     *
     * @return ApiClient
     */
    public function setHeaderEncoding($headerEncoding)
    {
        $this->headerEncoding = $headerEncoding;
        return $this;
    }

    /**
     * @param string $url
     * @param int    $id
     * @param array  $query
     * @param bool   $debug
     *
     * @return \Psr\Http\Message\StreamInterface
     * @throws \Exception
     */
    public function request($url, $id = null, $query = [], $debug = false)
    {
        $response = $this->client->request(
            'GET',
            $url . ((!is_null($id)) ? $id : ''),
            [
                'query'   => $query,
                'headers' => [
                    'Accept'        => $this->headerEncoding,
                    'Authorization' => 'Bearer ' . $this->accessToken,
                ],
                'debug'   => $debug,
            ]);

        if (Response::HTTP_OK == $response->getStatusCode()) {
            return $response->getBody();
        } else {
            throw new \Exception('Statuscode ' . $response->getStatusCode() . ' on ' . $url . ' (' . $response->getReasonPhrase() . ')');
        }
    }
}