<?php
declare(strict_types=1);

namespace unit\Filters;

use Codeception\Test\Unit;
use FreeToGame\ApiException;
use FreeToGame\Filters\CategoryFilter;
use FreeToGame\Filters\FilterCollection;
use FreeToGame\Filters\PlatformFilter;
use FreeToGame\Filters\Platforms\Browser;
use FreeToGame\Filters\SearchTerms\Shooter;
use FreeToGame\Filters\TagFilter;

class FilterCollectionTest extends Unit
{

    private FilterCollection $collection;

    protected function _before()
    {
        $this->collection = new FilterCollection();
    }

    /** @test */
    public function setAndGetPlatformFilter()
    {
        $platform = new Browser();
        $filter = new PlatformFilter($platform);
        $this->collection->setPlatformFilter($filter);

        $this->assertEquals($filter, $this->collection->getPlatformFilter());
    }

    /** @test */
    public function setAndGetCategoryFilter()
    {
        $searchTerm = new Shooter();
        $filter = new CategoryFilter($searchTerm);
        $this->collection->setCategoryFilter($filter);

        $this->assertEquals($filter, $this->collection->getCategoryFilter());
    }

    /** @test */
    public function setAndGetTagFilter()
    {
        $searchTerm = new Shooter();
        $filter = new TagFilter([$searchTerm]);
        $this->collection->setTagFilter($filter);

        $this->assertEquals($filter, $this->collection->getTagFilter());
    }

    /** @test */
    public function categoryAndTagException()
    {
        $this->expectException(ApiException::class);

        $searchTerm = new Shooter();
        $categoryFilter = new CategoryFilter($searchTerm);
        $tagFilter = new TagFilter([$searchTerm]);

        $this->collection->setCategoryFilter($categoryFilter);
        $this->collection->setTagFilter($tagFilter);
    }

    /** @test */
    public function tagAndCategoryException()
    {
        $this->expectException(ApiException::class);

        $searchTerm = new Shooter();
        $categoryFilter = new CategoryFilter($searchTerm);
        $tagFilter = new TagFilter([$searchTerm]);

        $this->collection->setTagFilter($tagFilter);
        $this->collection->setCategoryFilter($categoryFilter);
    }
}
