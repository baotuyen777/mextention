<?php
namespace Bss\David\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

    const XML_PATH_PRODUCT = 'section_product/';
    const XML_PATH_GENERAL = 'section_general/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getGeneralConfig($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_GENERAL .'group_general/'. $code, $storeId);
    }
    public function getProductConfig($code, $storeId = null)
    {

        return $this->getConfigValue(self::XML_PATH_PRODUCT .'group_price/'. $code, $storeId);
    }

}