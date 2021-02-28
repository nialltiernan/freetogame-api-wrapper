<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class Zombie extends SearchTerm
{

    function getValue(): string
    {
        return 'zombie';
    }
}
