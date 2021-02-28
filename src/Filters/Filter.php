<?php
declare(strict_types=1);

namespace FreeToGame\Filters;

abstract class Filter
{

    abstract function getKey(): string;

    abstract function getValue(): string;
}
