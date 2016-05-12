<?php
namespace Excellence\Hello\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    protected $registry;
    protected $_testFactory;
    protected $_test1Factory;
    protected $collectionData;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
        \Excellence\Hello\Model\Test1Factory $test1Factory,
        \Magento\Framework\Registry $registry,
        array $data = []
        )
     
    { 
        $this->_testFactory=$testFactory;
         $this->_test1Factory=$test1Factory;
         $this->registry = $registry;
        parent::__construct($context,$data);
    }
    protected function _prepareLayout()
    {
        $collectionData = $this->_testFactory->create()->joinData();
        //print_r($collectionData); die();
        

        $search = $this->registry->registry('searchData');
        $searchTerm = $this->registry->registry('searchTerm');
          if(!empty($search)){
            $collectionData = $search;
          }
          else{
            $collectionData = $this->registry->registry('tableData');
          }
          if(isset($searchTerm)){
            $this->setSearchTerm($searchTerm);
          }
          
           $this->setCollectModel($collectionData);
          return $collectionData;

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

    // public function joinData()
    // {
        
    //     $data = $this->_testFactory->create();

    //     $collectionData = $data->();
       
    //     $this->setTestModel($collectionData);

    // }

}