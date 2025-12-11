<?php

declare(strict_types=1);

namespace Hyva\WalkwizusMeilisearch\Model\LayoutHandle;

use Walkwizus\MeilisearchFrontend\Model\LayoutHandle\AddMeilisearchCommonHandle;
use Hyva\Theme\Service\CurrentTheme;
use Magento\Framework\View\LayoutInterface;

class AddHyvaMeilisearchCommonHandle extends AddMeilisearchCommonHandle
{
    /**
     * @param CurrentTheme $currentTheme
     */
    public function __construct(
        private readonly CurrentTheme $currentTheme
    ) { }

    /**
     * @param LayoutInterface $layout
     * @param string $fullActionName
     * @return bool
     */
    public function isApplicable(LayoutInterface $layout, string $fullActionName): bool
    {
        if (!$this->currentTheme->isHyva()) {
            return false;
        }

        return parent::isApplicable($layout, $fullActionName);
    }
}
