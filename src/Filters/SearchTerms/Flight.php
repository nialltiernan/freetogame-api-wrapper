<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Flight extends SearchTerm
{

    function getValue(): string
    {
        return 'flight';
    }
}
