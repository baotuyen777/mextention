<?php
namespace Bss\David\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
    protected $helperData;

    protected $_pageFactory;
    protected $_postFactory;
    protected $_helper;
    public function __construct(
        \Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Bss\David\Helper\Data $helper
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_helper = $helper;
        return parent::__construct($context);
    }

    public function execute()
    {
        $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Mageplaza'));
        $this->_eventManager->dispatch('bss_david_display_text', ['mp_text1' => $textDisplay]);
        echo $textDisplay->getText();
        exit;
        // TODO: Implement execute() method.
echo 111;
        echo ($this->_helper->getGeneralConfig('price')) ;
//        var_dump($this->_helper->getGeneralConfig('price')) ;
        exit();

    }
}
