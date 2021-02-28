<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class ActionRolePlayingGame extends SearchTerm
{

    function getValue(): string
    {
        return 'action-rpg';
    }
}
