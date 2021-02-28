<?php
declare(strict_types=1);

namespace FreeToGame\Filters;


use FreeToGame\Filters\Platforms\Platform;

class PlatformFilter extends Filter
{

    private Platform $platform;

    public function __construct(Platform $platform)
    {
        $this->platform = $platform;
    }

    function getKey(): string
    {
        return 'platform';
    }

    function getValue(): string
    {
        return $this->platform->getValue();
    }
}
