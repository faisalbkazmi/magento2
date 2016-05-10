<?php
namespace Excellence\Hello\Controller\Index;
use Magento\Framework\Controller\ResultFactory; 

class Delete extends \Magento\Framework\App\Action\Action
{
    protected $_testFactory;
    protected $_test1Factory;
    protected $messageManager;
    public function __construct(
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
        \Excellence\Hello\Model\Test1Factory $test1Factory )

              
    {
        $this->messageManager = $messageManager;
        $this->_testFactory = $testFactory;
        $this->_test1Factory = $test1Factory;
        return parent::__construct($context);
    }
    
    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $data = $this->_testFactory->create();
        $data1= $this->_test1Factory->create();
        $id = $this->getRequest()->getParam('id');
        if($data->deleteById($id)&&$data1->deleteById($id)){
        $this->messageManager->addSuccess('Add your success message');
          $resultRedirect->setUrl($this->_redirect->getRefererUrl());
     
          return $resultRedirect;
      }
  }
}