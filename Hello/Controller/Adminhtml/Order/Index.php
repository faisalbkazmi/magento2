<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Excellence\Hello\Controller\Adminhtml\Order;

class Index extends \Magento\Sales\Controller\Adminhtml\Order
{
    /**
     * Orders grid
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    // public function execute()
    // {
    //     // $resultPage = $this->_initAction();
    //     // $resultPage->getConfig()->getTitle()->prepend(__('Orders'));
    //     // return $resultPage;
    //     echo __METHOD__;
    //     exit;
    // }
    protected $resultPageFactory = false;
    public function __construct(
        \Magento\Backend\App\Action\Context $context
        //\Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        //$this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Excellence_Hello::hello_world_test1');
        $resultPage->addBreadcrumb(__('Hello'), __('Hello'));
        $resultPage->addBreadcrumb(__('World'), __('World'));
        $resultPage->getConfig()->getTitle()->prepend(__('Hello World'));
        return $resultPage;
    }
}
