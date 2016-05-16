<?php
namespace Excellence\Hello\Model\ResourceModel\Sliderpages;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Excellence\Hello\Model\Sliderpages','Excellence\Hello\Model\ResourceModel\Sliderpages');
    }
}
