<?php
declare(strict_types=1);

namespace FreeToGame\Sort;

class ReleaseDateSort extends Sort
{

    public function getValue(): string
    {
        return 'release-date';
    }
}
