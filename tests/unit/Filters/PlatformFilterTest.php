<?php
declare(strict_types=1);

namespace unit\Filters;

use Codeception\Test\Unit;
use FreeToGame\Filters\PlatformFilter;
use FreeToGame\Filters\Platforms\Browser;
use FreeToGame\Filters\Platforms\PersonalComputer;

class PlatformFilterTest extends Unit
{

    /** @test */
    public function getKey()
    {
        $filter = new PlatformFilter(new Browser());

        $this->assertEquals('platform', $filter->getKey());
    }

    /** @test */
    public function browser()
    {
        $platform = new Browser();
        $filter = new PlatformFilter($platform);

        $this->assertEquals($platform->getValue(), $filter->getValue());
    }

    /** @test */
    public function personalComputer()
    {
        $platform = new PersonalComputer();
        $filter = new PlatformFilter($platform);

        $this->assertEquals($platform->getValue(), $filter->getValue());
    }
}
