<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Military extends SearchTerm
{

    function getValue(): string
    {
        return 'military';
    }
}
