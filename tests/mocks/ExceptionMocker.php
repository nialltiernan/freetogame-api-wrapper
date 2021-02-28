<?php
declare(strict_types=1);

namespace mocks;

use FreeToGame\Client;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;

class ExceptionMocker
{
    public static function fetch(): Client
    {
        return new Client(self::getMockHttpClient());
    }

    private static function getMockHttpClient(): HttpClient
    {
        $mock = new MockHandler([self::getMockResponse()]);

        $handlerStack = HandlerStack::create($mock);

        return new HttpClient(['handler' => $handlerStack]);
    }

    private static function getMockResponse(): RequestException
    {
        return new RequestException('Error Communicating with Server', new Request('GET', 'test'));
    }
}
