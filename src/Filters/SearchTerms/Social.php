<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Social extends SearchTerm
{

    function getValue(): string
    {
        return 'social';
    }
}
