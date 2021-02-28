<?php
declare(strict_types=1);

namespace FreeToGame\Filters;

use FreeToGame\Filters\SearchTerms\SearchTerm;

class CategoryFilter extends Filter
{
    private SearchTerm $searchTerm;

    public function __construct(SearchTerm $searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }

    function getKey(): string
    {
        return 'category';
    }

    function getValue(): string
    {
        return $this->searchTerm->getValue();
    }
}
