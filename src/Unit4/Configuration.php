<?php

namespace Unit4;

class Configuration
{
    private $clientId = '';
    private $clientSecret = '';
    private $database = '';
    private $apiVersion = '';
    private $token = '';
    private $debug = false;

    public function __construct($clientId, $clientSecret, $database, $apiVersion = 'v191', $token = '', $debug = false)
    {
        $this->clientId     = $clientId;
        $this->clientSecret = $clientSecret;
        $this->database     = $database;
        $this->apiVersion   = $apiVersion;
        $this->token        = $token;
        $this->debug        = $debug;
    }

    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    public function getApiUri()
    {
        if ($this->debug) {
            return 'https://sandbox.api.online.unit4.nl/' . $this->apiVersion . '/';
        }

        return 'https://api.online.unit4.nl/' . $this->apiVersion . '/';
    }

    public function getRedirectUri()   // todo: this shouldn't be in this class anymore. The url is only used once, in the registration process
    {
        // XXX: this value must match the exact value specified in the app registration, otherwise it won't work
        if ($this->debug) {
            return 'https://sandbox.api.online.unit4.nl/V191/';
        }

        return '';
    }

    public function getAuthorizeUri()
    {
        return $this->getApiUri() . 'OAuth/Authorize';
    }

    public function getAccessTokenExchangeUri()
    {
        return $this->getApiUri() . 'OAuth/Token';
    }

    public function getScope()
    {
        // at the moment, multivers only supports ONE scope
        return 'http://UNIT4.Multivers.API/Web/WebApi/*';
    }

    public function getApiRoute($suffix = '')
    {
        $apiRoute = $this->getapiUri() . 'api/' . $this->database . '/';
        return (!empty($suffix)) ? $apiRoute . $suffix . '/' : $apiRoute;
    }

    public function hasToken()
    {
        if (empty($this->token)) {
            return false;
        }

        $token = $this->getToken();

        return !empty($token);
    }

    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }
}
