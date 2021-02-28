<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class PlayerVersusPlayer extends SearchTerm
{

    function getValue(): string
    {
        return 'pvp';
    }
}
