<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class MultiplayerOnlineBattleArena extends SearchTerm
{

    function getValue(): string
    {
        return 'moba';
    }
}
