<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class PlayerVersusEnvironment extends SearchTerm
{

    function getValue(): string
    {
        return 'pve';
    }
}
