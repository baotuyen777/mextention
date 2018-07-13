<?php
namespace Bss\David\Controller\Index;

class Abc extends \Magento\Framework\App\Action\Action
{
    protected $helperData;

    protected $_pageFactory;
    protected $_postFactory;
    protected $_helper;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Bss\David\Helper\Data $helper
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_helper = $helper;
        return parent::__construct($context);
    }

    public function execute()
    {

        // TODO: Implement execute() method.
        echo 111;
        var_dump($this->_helper->getGeneralConfig('pre_notify')) ;
//        echo $this->helperData->getGeneralConfig('price');
        exit();

    }
}
