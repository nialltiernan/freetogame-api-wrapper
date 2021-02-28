<?php
declare(strict_types=1);

namespace FreeToGame\Sort;

class RelevanceSort extends Sort
{

    public function getValue(): string
    {
        return 'relevance';
    }
}
