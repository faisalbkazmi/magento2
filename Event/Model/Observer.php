<?php
 
namespace Excellence\Event\Model;
 
class Observer {
 
public function printInfo(\Magento\Framework\Event\Observer $observer) {
$request = $observer->getEvent()->getData('request');
echo $request->getModuleName('catalog').'<br/>';
echo $request->getControllerName('product').'<br/>';
echo $request->getActionName('view').'<br/>';
die();
}
public function execute(\Magento\Framework\Event\Observer $observer)
    {
    	$this->_eventManager->dispatch(
            'customer_customer_authenticated',
            ['model' => $this, 'password' => $password]
        );
    	}
 
}