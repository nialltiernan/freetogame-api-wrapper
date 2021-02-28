<?php
declare(strict_types=1);

namespace FreeToGame\Filters;

use FreeToGame\ApiException;

class FilterCollection
{

    private ?PlatformFilter $platformFilter = null;
    private ?CategoryFilter $categoryFilter = null;
    private ?TagFilter $tagFilter = null;

    public function setPlatformFilter(PlatformFilter $platformFilter)
    {
        $this->platformFilter = $platformFilter;
    }

    /**
     * @param \FreeToGame\Filters\CategoryFilter $categoryFilter
     * @throws \FreeToGame\ApiException
     */
    public function setCategoryFilter(CategoryFilter $categoryFilter)
    {
        if ($this->isInvalidFilterCombination($categoryFilter, $this->tagFilter)) {
            throw new ApiException('Category and tag filters cannot both be set');
        }
        $this->categoryFilter = $categoryFilter;
    }

    /**
     * @param \FreeToGame\Filters\TagFilter $tagFilter
     * @throws \FreeToGame\ApiException
     */
    public function setTagFilter(TagFilter $tagFilter)
    {
        if ($this->isInvalidFilterCombination($this->categoryFilter, $tagFilter)) {
            throw new ApiException('Category and tag filters cannot both be set');
        }
        $this->tagFilter = $tagFilter;
    }

    private function isInvalidFilterCombination(?CategoryFilter $categoryFilter, ?TagFilter $tagFilter): bool
    {
        return $categoryFilter && $tagFilter;
    }

    public function getPlatformFilter(): ?PlatformFilter
    {
        return $this->platformFilter;
    }

    public function getCategoryFilter(): ?CategoryFilter
    {
        return $this->categoryFilter;
    }

    public function getTagFilter(): ?TagFilter
    {
        return $this->tagFilter;
    }

}
