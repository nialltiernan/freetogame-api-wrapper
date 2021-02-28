<?php
declare(strict_types=1);

namespace FreeToGame\Filters\SearchTerms;

class TowerDefense extends SearchTerm
{

    function getValue(): string
    {
        return 'tower-defense';
    }
}
