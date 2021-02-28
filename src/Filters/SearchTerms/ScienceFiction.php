<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class ScienceFiction extends SearchTerm
{

    function getValue(): string
    {
        return 'sci-fi';
    }
}
