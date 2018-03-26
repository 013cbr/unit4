<?php
namespace Unit4;

use Exception;
use Unit4\Configuration;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\Response;

class Connector
{
    protected $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function redirectToAuthorizationUri($redirect = true)
    {
        $authorizationUrl = $this->configuration->getAuthorizeUri() 
                          . '?client_id=' . rawurlencode($this->configuration->getClientId())
                          . '&scope=' . rawurlencode($this->configuration->getScope())
                          . '&redirect_uri=' . rawurlencode($this->configuration->getRedirectUri())
                          . '&response_type=code'
                          ;

        if ($redirect) {
            header('Location: ' . $authorizationUrl);
            exit;
        }

        return $authorizationUrl;
    }

    protected function createStringFromParameters($parameters)
    {
        $parameterString = '';
        foreach ($parameters as $key => $value) {
            if (!empty($parameterString)) {
                $parameterString .= '&';
            }
            $parameterString .= $key . '=' . rawurlencode($value);
        }
        return $parameterString;
    }

    public function exchangeCodeForTokens($code = '')
    {
        try {
            if (empty($code)) {
                throw new Exception('Code ontbreekt');
            }

            try {
                $parameters = [
                    'code' => $code,
                    'client_id' => $this->configuration->getClientId(),
                    'client_secret' => $this->configuration->getClientSecret(),
                    'redirect_uri' => $this->configuration->getRedirectUri(),
                    'grant_type' => 'authorization_code',
                ];

                $client = new Client();
                $response = $client->request('POST', $this->configuration->getAccessTokenExchangeUri(), [
                    'form_params' => $parameters,
                    'headers' => [
                        'Accept' => 'application/json',
                    ],
                ]);

                if (Response::HTTP_OK == $response->getStatusCode()) {
                    $body = $response->getBody();
                    $content = json_decode($body);

                    $accessToken = $content->access_token;

                    $this->configuration->storeToken($content->refresh_token);
                    return $accessToken;        // return the temporary access token
                } else {
                    throw new Exception('Statuscode ' . $response->getStatusCode() . ' on ' . $this->configuration->getAccessTokenExchangeUri() . ' (' . $response->getReasonPhrase() . ')');
                }
            } catch (RequestException $e) {
                // usually indicates a networking error
                throw $e;
            } catch (Exception $e) {
                throw $e;
            }

        } catch (IdentityProviderException $e) {
            throw $e;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getAccessToken()
    {
        try {
            if (!$this->configuration->hasToken()) {
                throw new Exception('Refresh token ontbreekt (is de authorization grant al uitgevoerd?)');
            }

            $refreshToken = $this->configuration->retrieveToken();

            $parameters = [
                'refresh_token' => $refreshToken,
                'client_id' => $this->configuration->getClientId(),
                'client_secret' => $this->configuration->getClientSecret(),
                'redirect_uri' => $this->configuration->getRedirectUri(),
                'grant_type' => 'refresh_token',
            ];

            $client = new Client();
            $response = $client->request('POST', $this->configuration->getAccessTokenExchangeUri(), [
                'form_params' => $parameters,
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if (Response::HTTP_OK == $response->getStatusCode()) {
                $body = $response->getBody();
                $content = json_decode($body);

                return $content->access_token;
            } else {
                throw new Exception('Statuscode ' . $response->getStatusCode() . ' on ' . $this->configuration->getAccessTokenExchangeUri() . ' (' . $response->getReasonPhrase() . ')');
            }

            return $accessToken;
        } catch (Exception $e) {
            if (is_testing()) {
                throw new Exception('AccessToken kon niet worden opgevraagd (' . $e->getMessage() . ')');
            } else {
                throw new Exception('AccessToken kon niet worden opgevraagd');
            }
        }
    }

    public function getConfiguration()
    {
        return $this->configuration;
    }
}
