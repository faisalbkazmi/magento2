<?php
namespace Excellence\Hello\Controller\Hello;
 
 
class World extends \Magento\Framework\App\Action\Action
{
    protected $registry;
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Registry $registry
        )
    {
        $this->resultPageFactory = $resultPageFactory;  
        $this->registry = $registry;     
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $post = $this->getRequest()->getPost('data');
        print_r($post); 
        return $this->resultPageFactory->create(); 
    } 
}
