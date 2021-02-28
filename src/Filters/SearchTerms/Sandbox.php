<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Sandbox extends SearchTerm
{

    function getValue(): string
    {
        return 'sandbox';
    }
}
