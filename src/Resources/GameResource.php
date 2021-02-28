<?php
declare(strict_types=1);

namespace FreeToGame\Resources;

use FreeToGame\ApiException;
use FreeToGame\Response;
use GuzzleHttp\Exception\GuzzleException;

class GameResource extends Resource
{
    private const ROUTE = 'game';

    /**
     * @param int $gameId
     * @return \FreeToGame\Response
     * @throws \FreeToGame\ApiException
     */
    public function fetchDetails(int $gameId): Response
    {
        $url = $this->getUrl();
        $params = ['id' => $gameId];

        try {
            $response = $this->httpClient->get($url, ['query' => $params]);
            return new Response($response);
        } catch (GuzzleException $e) {
            throw new ApiException('API error: ' . $e->getMessage(), 0, $e);
        }
    }

    protected function getUrl(): string
    {
        return $this->endpoint . self::ROUTE;
    }
}
