<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Permadeath extends SearchTerm
{

    function getValue(): string
    {
        return 'permadeath';
    }
}
