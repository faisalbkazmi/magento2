<?php
namespace Excellence\Hello\Controller\Hello;
 
 
class World extends \Magento\Framework\App\Action\Action
{
    protected $registry;
    protected $resultPageFactory;
    protected $_testFactory;
    protected $_test1Factory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
        \Excellence\Hello\Model\Test1Factory $test1Factory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $registry)

        
    {
        $this->resultPageFactory = $resultPageFactory;  
        $this->registry = $registry;     
        $this->_testFactory=$testFactory;
        $this->_test1Factory=$test1Factory;
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $model = $this->_testFactory->create();
        $model1= $this->_test1Factory->create();
        $post = $this->getRequest()->getPost('data');
         // print_r($post); die();
        if(isset($post)){
            // $searchData1 = $model1->searchData($post['srch']);
            $searchData = $model->searchData($post['srch']);  
             // print_r($searchData); die();
            $this->registry->register('searchData', $searchData);
            
           
            
            $this->registry->register('searchTerm', $post['srch']);
        } else{
            $tableData = $model->getTableData();

            $this->registry->register('tableData', $tableData); 
        }
        return $this->resultPageFactory->create(); 
    }
     

}
