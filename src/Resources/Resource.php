<?php
declare(strict_types=1);

namespace FreeToGame\Resources;

use GuzzleHttp\Client as HttpClient;

abstract class Resource
{
    protected HttpClient $httpClient;
    protected string $endpoint;

    public function __construct(string $endpoint, HttpClient $httpClient)
    {
        $this->endpoint = $endpoint;
        $this->httpClient = $httpClient;
    }
}
