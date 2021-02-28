<?php
declare(strict_types=1);

namespace mocks;

use FreeToGame\Client;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class JsonMocker
{
    public static function fetch(string $function): Client
    {
        return new Client(self::getMockHttpClient($function));
    }

    private static function getMockHttpClient(string $function): HttpClient
    {
        $mock = new MockHandler([self::getMockResponse($function)]);

        $handlerStack = HandlerStack::create($mock);

        return new HttpClient(['handler' => $handlerStack]);
    }

    private static function getMockResponse(string $function): Response
    {
        return new Response(
            Status::HTTP_OK,
            ['Content-Type' => 'application/json'],
            self::getMockResponseBody($function)
        );
    }

    private static function getMockResponseBody(string $function): string
    {
        return file_get_contents(sprintf('%s/../_data/ClientTest/%s.json', __DIR__, $function));
    }
}
