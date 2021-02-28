<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Action extends SearchTerm
{

    function getValue(): string
    {
        return 'action';
    }
}
