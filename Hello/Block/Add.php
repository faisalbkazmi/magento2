<?php
namespace Excellence\Hello\Block;
  
class Add extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory
    )
    {
        $this->_testFactory = $testFactory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
        
        $test = $this->_testFactory->create();

        $collectionData = $test->getCollection()->getData();
       
        $this->setTestModel($collectionData);
    }
    public function getListUrl()
    {
        return $this->_urlBuilder->getUrl("excellence/Hello/World");
    }
}