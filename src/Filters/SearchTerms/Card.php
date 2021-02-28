<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Card extends SearchTerm
{

    function getValue(): string
    {
        return 'card';
    }
}
