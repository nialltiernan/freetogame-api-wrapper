<?php
declare(strict_types=1);

namespace FreeToGame\Filters\Platforms;

class Browser extends Platform
{

    function getValue(): string
    {
        return 'browser';
    }
}
