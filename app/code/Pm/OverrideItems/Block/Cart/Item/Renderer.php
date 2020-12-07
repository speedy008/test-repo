<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Pm\OverrideItems\Block\Cart\Item;

class Renderer extends \Magento\Checkout\Block\Cart\Item\Renderer
{
    /**
     * Get item product short description
     *
     * @return string
     */
    public function getProductShortDescription()
    {
        return $this->getItem()->getProduct()->getShortDescription();
    }
}
