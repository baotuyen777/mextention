<?php

namespace Bss\David\Plugin;

use Bss\David\Helper\Data;

class Notify
{
    protected $helper;
    private $messageManager;

    public function __construct(Data $helper)
    {
        $this->helper = $helper;
//        $this->messageManager = $messageManager;
    }

    public function beforeAddSuccessMessage(\Magento\Framework\Message\Manager $session, $message, $group = null)
    {
        $preText = $this->helper->getGeneralConfig('pre_notify');
        if ($preText)
            $message = $preText . ' ' . $message;
        else {
            $message = 'abc ' . $message;
        }
        return [$message, $group];
    }

    public function beforeAddErrorMessage(\Magento\Framework\Message\Manager $session, $message, $group = null)
    {
        $preText = $this->helper->getGeneralConfig('pre_notify');
        if ($preText)
            $message = $preText . ' ' . $message;
        else {
            $message = 'abc ' . $message;
        }
        return [$message, $group];
    }

    public function beforeAddWarningMessage(\Magento\Framework\Message\Manager $session, $message, $group = null)
    {
        $preText = $this->helper->getGeneralConfig('pre_notify');
        if ($preText)
            $message = $preText . ' ' . $message;
        else {
            $message = 'abc ' . $message;
        }
        return [$message, $group];
    }

    public function beforeAddNoticeMessage(\Magento\Framework\Message\Manager $session, $message, $group = null)
    {
        $preText = $this->helper->getGeneralConfig('pre_notify');
        if ($preText)
            $message = $preText . ' ' . $message;
        else {
            $message = 'abc ' . $message;
        }
        return [$message, $group];
    }
    public function beforeAddExceptionMessage(\Magento\Framework\Message\Manager $session, $message, $group = null)
    {
        $preText = $this->helper->getGeneralConfig('pre_notify');
        if ($preText)
            $message = $preText . ' ' . $message;
        else {
            $message = 'abc ' . $message;
        }
        return [$message, $group];
    }
    public function beforeAddException(\Magento\Framework\Message\Manager $session,\Exception $exception, $alternativeText, $group = null)
    {
        $preText = $this->helper->getGeneralConfig('pre_notify');
        if ($preText)
            $alternativeText = $preText . ' ' . $alternativeText;
        else {
            $alternativeText = 'abc ' . $alternativeText;
        }
        return [$exception, $alternativeText,$group];
    }
    public function beforeAddSuccess(\Magento\Framework\Message\Manager $session, $message, $group = null)
    {
        $preText = $this->helper->getGeneralConfig('pre_notify');
        if ($preText)
            $message = $preText . ' ' . $message;
        else {
            $message = 'abc ' . $message;
        }
        return [$message, $group];
    }
}