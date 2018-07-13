<?php

namespace Bss\David\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
use Bss\David\Helper\Data;
class ChangePrice implements \Magento\Framework\Event\ObserverInterface
{
    protected $helper;

    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $product = $observer->getEvent()->getProduct();
        $finalPrice = $this->helper->getProductConfig('price');
        if ($finalPrice){
            $product->setPrice($finalPrice);
            $product->setFinalPrice($finalPrice); // set final price here
        }
        return $this;
    }
}