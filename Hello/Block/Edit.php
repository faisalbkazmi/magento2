<?php
namespace Excellence\Hello\Block;
  
class Edit extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;
    protected $_test1Factory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
         \Excellence\Hello\Model\Test1Factory $test1Factory)
    {
        $this->_test1Factory = $test1Factory;
        $this->_testFactory = $testFactory;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
        $data= $this->_testFactory->create();
        $data1 = $this->_test1Factory->create();
        $id = $this->getRequest()->getParam('id');
        $collectionData1= $data1->getDataById($id);
        $collectionData = $data->getDataById($id);
        $this->setRowAddress($collectionData1);
        $this->setRowData($collectionData);
    }
    public function getListUrl()
    {
        return $this->_urlBuilder->getUrl("excellence/Hello/World");
    }
}