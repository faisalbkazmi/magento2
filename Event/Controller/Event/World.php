<?php
namespace Excellence\Event\Controller\Event;
 
 
class World extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }
     
    public function execute()
    {
        // echo 'Hello event';
        // exit;
    } 
}