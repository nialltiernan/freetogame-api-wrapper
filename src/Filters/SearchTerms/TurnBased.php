<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class TurnBased extends SearchTerm
{

    function getValue(): string
    {
        return 'turn-based';
    }
}
