<?php
namespace Excellence\Hello\Model\ResourceModel\Test1;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Excellence\Hello\Model\Test1','Excellence\Hello\Model\ResourceModel\Test1');
    }
}
