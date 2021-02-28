<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class MassivelyMultiplayerOnline extends SearchTerm
{

    function getValue(): string
    {
        return 'mmo';
    }
}
