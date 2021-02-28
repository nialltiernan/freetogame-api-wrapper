<?php
declare(strict_types=1);

namespace FreeToGame\Filters\Platforms;


class PersonalComputer extends Platform
{

    function getValue(): string
    {
        return 'pc';
    }
}
