<?php
declare(strict_types=1);

namespace FreeToGame\Sort;

class PopularitySort extends Sort
{

    public function getValue(): string
    {
        return 'popularity';
    }
}
