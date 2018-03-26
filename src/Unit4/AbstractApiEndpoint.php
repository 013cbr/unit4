<?php

namespace Unit4;

use Unit4\Configuration;
use Unit4\ApiClient;

abstract class AbstractApiEndpoint
{
    protected $configuration;
    protected $apiClient;

    public function __construct(Configuration $configuration, ApiClient $apiClient)
    {
        $this->configuration = $configuration;
        $this->apiClient     = $apiClient;
    }
}