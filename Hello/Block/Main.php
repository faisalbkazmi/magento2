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
         
    $this->setCollectModel($collectionData);
    }
    public function getDeleteUrl($id)
    {
       return $this->_urlBuilder->getUrl("excellence/index/delete/", array('id' => $id));
    }

    public function getEditUrl($id)
    {

     return $this->_urlBuilder->getUrl("excellence/index/edit/", array('id' => $id));
    }
    public function getAddUrl()
    {
        return $this->_urlBuilder->getUrl("excellence/index/add");
    }
}