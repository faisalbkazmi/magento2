<?php
namespace Excellence\Hello\Model\ResourceModel;
class Test1 extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_hello_test1','id');
    }
}
