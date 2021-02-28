<?php
declare(strict_types=1);

namespace FreeToGame;

use FreeToGame\Filters\FilterCollection;
use FreeToGame\Resources\GameResource;
use FreeToGame\Resources\GamesResource;
use FreeToGame\Sort\Sort;
use GuzzleHttp\Client as HttpClient;

class Client
{
    private const ENDPOINT = 'https://www.freetogame.com/api/';
    private HttpClient $httpClient;

    public function __construct(HttpClient $mockedHttpClient = null)
    {
        $this->httpClient = $mockedHttpClient ?? new HttpClient();
    }

    /**
     * @param int $gameId
     * @return \FreeToGame\Response
     * @throws \FreeToGame\ApiException
     */
    public function fetchDetails(int $gameId): Response
    {
        $gameResource = new GameResource(self::ENDPOINT, $this->httpClient);
        return $gameResource->fetchDetails($gameId);
    }

    /**
     * @param \FreeToGame\Filters\FilterCollection|null $filterCollection
     * @param \FreeToGame\Sort\Sort|null $sort
     * @return \FreeToGame\Response
     * @throws \FreeToGame\ApiException
     */
    public function fetchList(FilterCollection $filterCollection = null, Sort $sort = null): Response
    {
        $gamesResource = new GamesResource(self::ENDPOINT, $this->httpClient);
        return $gamesResource->fetchList($filterCollection, $sort);
    }
}
