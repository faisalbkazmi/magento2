<?php
namespace Excellence\Hello\Controller\Index;
 use Magento\Framework\Controller\ResultFactory;
 
class Add extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
         \Excellence\Hello\Model\Test1Factory $test1Factory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultRedirectFactory = $context->getResultRedirectFactory();
        $this->_testFactory = $testFactory;
        $this->_test1Factory = $test1Factory;
        $this->messageManager=$messageManager;
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $data = $this->_testFactory->create();
         $data1 = $this->_test1Factory->create();
        $post = $this->getRequest()->getPost('data');
        $add=$post['address'];

        if(isset($post['submit'])) {
            $data1->saveAddress($add,$id);
            $data->saveEdit($post,$id);
            $this->messageManager->addSuccess( __('Item Added') );
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('excellence/Hello/World');
        return $resultRedirect;
        }
        return $this->resultPageFactory->create(); 
    } 
}