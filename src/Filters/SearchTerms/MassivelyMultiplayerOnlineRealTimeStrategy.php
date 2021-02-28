<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class MassivelyMultiplayerOnlineRealTimeStrategy extends SearchTerm
{

    function getValue(): string
    {
        return 'mmorts';
    }
}
