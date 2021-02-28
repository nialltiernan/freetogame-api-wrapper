<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

abstract class SearchTerm
{
    abstract function getValue(): string;
}
