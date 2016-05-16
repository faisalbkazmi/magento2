<?php
namespace Excellence\Hello\Model\ResourceModel;
class Sliderpages extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_hello_sliderpages','excellence_hello_sliderpages_id');
    }
}
