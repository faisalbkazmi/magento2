<?php
namespace Excellence\Hello\Block;
  
class Add extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
         \Excellence\Hello\Model\Test1Factory $test1Factory)
    {
        $this->_testFactory = $testFactory;
        $this->_test1Factory = $test1Factory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
        $data1 = $this->_test1Factory->create();
        $data = $this->_testFactory->create();
        
        $collectionData = $data->getCollection();
       
        $this->setTestModel($collectionData);
    }
    public function getListUrl()
    {
        return $this->_urlBuilder->getUrl("excellence/Hello/World");
    }
}