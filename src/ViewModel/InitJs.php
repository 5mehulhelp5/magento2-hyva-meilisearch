<?php

declare(strict_types=1);

namespace Hyva\WalkwizusMeilisearch\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class InitJs implements ArgumentInterface
{
    /**
     * @param array $scripts
     */
    public function __construct(
        private readonly array $scripts = []
    ) { }

    /**
     * @return array
     */
    public function getScripts(): array
    {
        return $this->scripts;
    }
}
