<?php

namespace functional;

use Codeception\Test\Unit;
use FreeToGame\ApiException;
use FreeToGame\Filters\CategoryFilter;
use FreeToGame\Filters\FilterCollection;
use FreeToGame\Filters\PlatformFilter;
use FreeToGame\Filters\Platforms\Browser;
use FreeToGame\Filters\SearchTerms\Shooter;
use FreeToGame\Filters\TagFilter;
use FreeToGame\Sort\ReleaseDateSort;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;
use mocks\ExceptionMocker;
use mocks\JsonMocker;

class ClientTest extends Unit
{

    public function testTerms()
    {
        $i = 1;
        foreach (glob('/home/niall/Projects/free-to-game-api-wrapper/src/Sort/*.php') as $term) {
            echo $i++ . '. ' . substr(explode('/', $term)[7], 0, -4). PHP_EOL;
        }
    }

    /** @test */
    public function fetchDetails()
    {
        $client = JsonMocker::fetch(__FUNCTION__);

        $response = $client->fetchDetails(452);

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($response->getData());
    }

    /** @test */
    public function fetchList()
    {
        $client = JsonMocker::fetch(__FUNCTION__);

        $response = $client->fetchList();

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($response->getData());
    }

    /** @test */
    public function platformFilterList()
    {
        $client = JsonMocker::fetch(__FUNCTION__);

        $filter = new PlatformFilter(new Browser());
        $filterCollection = new FilterCollection();
        $filterCollection->setPlatformFilter($filter);

        $response = $client->fetchList($filterCollection);

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($response->getData());
    }

    /** @test */
    public function categoryFilterList()
    {
        $client = JsonMocker::fetch(__FUNCTION__);

        $filter = new CategoryFilter(new Shooter());
        $filterCollection = new FilterCollection();
        $filterCollection->setCategoryFilter($filter);

        $response = $client->fetchList($filterCollection);

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($response->getData());
    }

    /** @test */
    public function tagFilterList()
    {
        $client = JsonMocker::fetch(__FUNCTION__);

        $filter = new TagFilter([new Shooter()]);
        $filterCollection = new FilterCollection();
        $filterCollection->setTagFilter($filter);

        $response = $client->fetchList($filterCollection);

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($response->getData());
    }

    /** @test */
    public function sortList()
    {
        $client = JsonMocker::fetch(__FUNCTION__);

        $sort = new ReleaseDateSort();

        $response = $client->fetchList(null, $sort);

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($response->getData());
    }

    /** @test */
    public function filterAndSortList()
    {
        $client = JsonMocker::fetch(__FUNCTION__);

        $filter = new CategoryFilter(new Shooter());
        $filterCollection = new FilterCollection();
        $filterCollection->setCategoryFilter($filter);

        $sort = new ReleaseDateSort();

        $response = $client->fetchList($filterCollection, $sort);

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($response->getData());
    }

    /** @test */
    public function fetchDetailsException()
    {
        $this->expectException(ApiException::class);

        $client = ExceptionMocker::fetch();

        $client->fetchDetails(452);
    }

    /** @test */
    public function fetchListException()
    {
        $this->expectException(ApiException::class);

        $client = ExceptionMocker::fetch();

        $client->fetchList();
    }
}
