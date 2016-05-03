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
          $data=$this->testFactory->create();
          $collectionData = $data->getCollection()->getData();
         
    $this->setTestModel($collectionData);
    }
    public function getDeleteUrl($id)
    {
        $deleteUrl = "excellence/index/delete/id/".$id;
        return $this->_urlBuilder->getUrl($deleteUrl);
    }
    public function getEditUrl($id)
    {
        $editUrl = "excellence/index/edit/id/".$id;
        return $this->_urlBuilder->getUrl($editUrl);
    }
    public function getAddUrl()
    {
        return $this->_urlBuilder->getUrl("excellence/index/add");
    }
}