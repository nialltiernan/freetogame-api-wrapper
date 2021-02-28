<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class ThirdPerson extends SearchTerm
{

    function getValue(): string
    {
        return 'third-Person';
    }
}
