<?php
namespace Excellence\Hello\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory
    )
    { 
        $this->testFactory=$testFactory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
          $data=$this->testFactory->create()->getData();
          print_r($data);
    }
}