<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class FirstPerson extends SearchTerm
{

    function getValue(): string
    {
        return 'first-person';
    }
}
