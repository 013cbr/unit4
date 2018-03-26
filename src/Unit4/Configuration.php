<?php
namespace Unit4;

class Configuration     // todo: rewrite class so it uses a settings file or something
{
    const API_VERSION_NUMBER = 'v191';
    const DATABASE = 'MVLXXXXX';
    const TOKEN_FILE = 'refreshtoken.tkn';

    protected $debug = false;

    public function __construct($debug = false)
    {
        $this->debug = $debug;
    }

    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    public function getClientId()
    {
        if ($this->debug) {
            return '';
        }

        return '';
    }

    public function getClientSecret()
    {
        if ($this->debug) {
            return '';
        }

        return '';
    }

    public function getApiUri()
    {
        if ($this->debug) {
            return 'https://sandbox.api.online.unit4.nl/' . static::API_VERSION_NUMBER . '/';
        }

        return 'https://api.online.unit4.nl/' . static::API_VERSION_NUMBER . '/';
    }

    public function getRedirectUri()
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
        $apiUri = $this->getApiUri() . 'api/' . static::DATABASE . '/';
        return (!empty($suffix)) ? $apiUri . $suffix . '/' : $apiUri;
    }

    public function hasToken()
    {
        if (!file_exists(static::TOKEN_FILE)) {
            return false;
        }

        $token = $this->retrieveToken();
        
        return !empty($token);
    }

    public function storeToken($token)
    {
        file_put_contents(static::TOKEN_FILE, $token);
        return $this;
    }

    public function retrieveToken()
    {
        if (!file_exists(static::TOKEN_FILE)) {
            throw new \Exception('Token bestaat nog niet');
        }

        return file_get_contents(static::TOKEN_FILE);
    }


}
