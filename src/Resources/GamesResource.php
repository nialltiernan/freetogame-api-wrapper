<?php
declare(strict_types=1);

namespace FreeToGame\Resources;

use FreeToGame\ApiException;
use FreeToGame\Filters\FilterCollection;
use FreeToGame\Response;
use FreeToGame\Sort\Sort;
use GuzzleHttp\Exception\GuzzleException;

class GamesResource extends Resource
{
    private const ROUTE_GAMES = 'games';
    private const ROUTE_FILTER = 'filter';

    /**
     * @param \FreeToGame\Filters\FilterCollection|null $filterCollection
     * @param \FreeToGame\Sort\Sort|null $sort
     * @return \FreeToGame\Response
     * @throws \FreeToGame\ApiException
     */
    public function fetchList(FilterCollection $filterCollection = null, Sort $sort = null): Response
    {
        $url = $this->getUrl($filterCollection);
        $params = $this->getQueryParams($filterCollection, $sort);

        try {
            $response = $this->httpClient->get($url, ['query' => $params]);
            return new Response($response);
        } catch (GuzzleException $e) {
            throw new ApiException('API error: ' . $e->getMessage(), 0, $e);
        }
    }

    private function getQueryParams(FilterCollection $filterCollection = null, Sort $sort = null): array
    {
        $params = [];

        if ($filterCollection) {
            $platformFilter = $filterCollection->getPlatformFilter();
            if ($platformFilter) {
                $params[$platformFilter->getKey()] = $platformFilter->getValue();
            }

            $categoryFilter = $filterCollection->getCategoryFilter();
            if ($categoryFilter) {
                $params[$categoryFilter->getKey()] = $categoryFilter->getValue();
            }

            $tagFilter = $filterCollection->getTagFilter();
            if ($tagFilter) {
                $params[$tagFilter->getKey()] = $tagFilter->getValue();
            }
        }

        if ($sort) {
            $params['sort-by'] = $sort->getValue();
        }

        return $params;
    }

    protected function getUrl(?FilterCollection $filterCollection): string
    {
        if ($filterCollection && $filterCollection->getTagFilter()) {
            return $this->endpoint . self::ROUTE_FILTER;
        }
        return $this->endpoint . self::ROUTE_GAMES;
    }
}
