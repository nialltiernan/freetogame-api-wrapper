<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class MassivelyMultiplayerOnlineRolePlayingGame extends SearchTerm
{

    function getValue(): string
    {
        return 'mmorpg';
    }
}
