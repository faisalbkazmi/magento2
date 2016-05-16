<?php

namespace Excellence\Event\Observer;
 
use \Psr\Log\LoggerInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Login implements ObserverInterface
{
   
     public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
 
    public function execute(Observer $observer)
    {       
                $customer_email = $observer->getEvent()->getCustomer()->getEmail();
                // $customer = Mage::getModel("customer/customer");
                // $customer->setWebsiteId(Mage::app()->getWebsite()->getId());
                $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
                $orderStatus = $objectManager->create('Magento\Sales\Model\Order')->load($order_id);
                $customer->loadByEmail($customer_email);

      
        // $this->logger->warn('hello Observer Works');
        // exit;
    }
}
