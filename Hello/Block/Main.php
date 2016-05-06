<?php
namespace Excellence\Hello\Block;
 use Magento\Framework\Controller\ResultFactory;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    protected $registry;
    protected $_testFactory;
    public function __construct(
       \Magento\Framework\Message\ManagerInterface $messageManager,
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
        \Magento\Framework\Registry $registry
    )
    { 
        $this->testFactory=$testFactory;
        $this->messageManager=$messageManager;
         $this->registry = $registry;
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
        $data=$this->testFactory->create();
          $search = $this->registry->registry('search');
          if(!empty($search)){
           
            $collectionData = $data->getCollection()
                            ->addFieldToFilter(
                                array('name', 'message','email'),
                                array(
                                    array('like'=>'%'.$search.'%'), 
                                    array('like'=>'%'.$search.'%'),
                                    array('like'=>'%'.$search.'%')
                                )
                            )
                    ->setOrder('id', 'DESC');
          if(count($collectionData)<=0)
          {
             $this->messageManager->addSuccess( __('NO record found') );
          }
          }
          else{
            $collectionData = $data->getCollection()->setOrder('id', 'DESC');
          }
          if(isset($search)){
            $this->setSearchTerm($search);
          }
          
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