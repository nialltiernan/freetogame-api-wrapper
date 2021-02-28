<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Anime extends SearchTerm
{

    function getValue(): string
    {
        return 'anime';
    }
}
