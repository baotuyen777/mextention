<?php

namespace Bss\David\Plugin;

use Bss\David\Helper\Data;

class Product
{
    protected $helper;

    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $newPrice = $this->helper->getGeneralConfig('price');
        if ($newPrice)
            return $newPrice;
        return $result;
    }
}