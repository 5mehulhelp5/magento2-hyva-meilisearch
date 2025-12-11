<?php

declare(strict_types=1);

namespace Hyva\WalkwizusMeilisearch\Model\LayoutHandle;

use Hyva\Theme\Service\CurrentTheme;
use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\App\RequestInterface;
use Walkwizus\MeilisearchFrontend\Model\LayoutHandle\AddMeilisearchResultHandle;
use Magento\Framework\View\LayoutInterface;

class AddHyvaMeilisearchResultHandle extends AddMeilisearchResultHandle
{
    /**
     * @param RequestInterface $request
     * @param CategoryRepositoryInterface $categoryRepository
     * @param CurrentTheme $currentTheme
     */
    public function __construct(
        RequestInterface $request,
        CategoryRepositoryInterface $categoryRepository,
        private readonly CurrentTheme $currentTheme
    ) {
        parent::__construct($request, $categoryRepository);
    }

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
