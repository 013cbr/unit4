<?php

namespace Unit4;

abstract class AbstractApiEndpoint
{
    /**
     * @var Configuration
     */
    protected $configuration;
    
    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * AbstractApiEndpoint constructor.
     *
     * @param Configuration $configuration
     * @param ApiClient     $apiClient
     */
    public function __construct(Configuration $configuration, ApiClient $apiClient)
    {
        $this->configuration = $configuration;
        $this->apiClient     = $apiClient;
    }
}