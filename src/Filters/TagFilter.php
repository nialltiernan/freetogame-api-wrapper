<?php
declare(strict_types=1);

namespace FreeToGame\Filters;

use FreeToGame\ApiException;

class TagFilter extends Filter
{

    private array $searchTerms;

    public function __construct(array $searchTerms)
    {
        if (! $searchTerms) {
            throw new ApiException('Tags array cannot be empty');
        }

        /** @var \FreeToGame\Filters\SearchTerms\SearchTerm $searchTerm */
        foreach ($searchTerms as $searchTerm) {
            $this->searchTerms[] = $searchTerm->getValue();
        }
    }

    function getKey(): string
    {
        return 'tag';
    }

    function getValue(): string
    {
        return implode('.', $this->searchTerms);
    }

}
