<?php
declare(strict_types=1);

namespace unit\Sort;

use Codeception\Test\Unit;
use FreeToGame\Sort\AlphabeticalSort;
use FreeToGame\Sort\PopularitySort;
use FreeToGame\Sort\ReleaseDateSort;
use FreeToGame\Sort\RelevanceSort;

class SortTest extends Unit
{

    /** @test */
    public function alphabetical()
    {
        $sort = new AlphabeticalSort();

        $this->assertEquals('alphabetical', $sort->getValue());
    }

    /** @test */
    public function popular()
    {
        $sort = new PopularitySort();

        $this->assertEquals('popularity', $sort->getValue());
    }

    /** @test */
    public function releaseDate()
    {
        $sort = new ReleaseDateSort();

        $this->assertEquals('release-date', $sort->getValue());
    }


    /** @test */
    public function relevance()
    {
        $sort = new RelevanceSort();

        $this->assertEquals('relevance', $sort->getValue());
    }

}
