<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Sports extends SearchTerm
{

    function getValue(): string
    {
        return 'sports';
    }
}
