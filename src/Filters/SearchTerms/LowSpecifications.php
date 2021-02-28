<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class LowSpecifications extends SearchTerm
{

    function getValue(): string
    {
        return 'low-spec';
    }
}
