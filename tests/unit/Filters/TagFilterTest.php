<?php
declare(strict_types=1);

namespace unit\Filters;

use Codeception\Test\Unit;
use FreeToGame\ApiException;
use FreeToGame\Filters\SearchTerms\OpenWorld;
use FreeToGame\Filters\SearchTerms\Shooter;
use FreeToGame\Filters\SearchTerms\Sports;
use FreeToGame\Filters\TagFilter;

class TagFilterTest extends Unit
{

    /** @test */
    public function getKey()
    {
        $filter = new TagFilter([new Shooter()]);

        $this->assertEquals('tag', $filter->getKey());
    }

    /** @test */
    public function singleSearchTerm()
    {
        $searchTerm = new Shooter();
        $filter = new TagFilter([$searchTerm]);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function manySearchTerms()
    {
        $shooter = new Shooter();
        $sports = new Sports();
        $openWorld = new OpenWorld();

        $terms = [$shooter->getValue(), $sports->getValue(), $openWorld->getValue()];

        $filter = new TagFilter([$shooter, $sports, $openWorld]);

        $this->assertEquals(implode('.', $terms), $filter->getValue());
    }

    /** @test */
    public function noSearchTerms()
    {
        $this->expectException(ApiException::class);

        new TagFilter([]);
    }
}
