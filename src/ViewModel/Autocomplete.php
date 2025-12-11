<?php

declare(strict_types=1);

namespace Hyva\WalkwizusMeilisearch\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Autocomplete implements ArgumentInterface
{
    /**
     * @param array $renderers
     */
    public function __construct(
        private readonly array $renderers = []
    ) { }

    /**
     * @return array
     */
    public function getRenderers(): array
    {
        return $this->renderers;
    }
}
