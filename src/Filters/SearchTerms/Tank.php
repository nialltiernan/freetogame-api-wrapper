<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Tank extends SearchTerm
{

    function getValue(): string
    {
        return 'tank';
    }
}
