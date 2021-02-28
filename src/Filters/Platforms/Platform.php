<?php
declare(strict_types=1);

namespace FreeToGame\Filters\Platforms;

abstract class Platform
{
    abstract function getValue(): string;
}
