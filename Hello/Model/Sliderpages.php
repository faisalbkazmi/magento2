<?php
namespace Excellence\Hello\Model;
class Sliderpages extends \Magento\Framework\Model\AbstractModel implements SliderpagesInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'excellence_hello_sliderpages';

    protected function _construct()
    {
        $this->_init('Excellence\Hello\Model\ResourceModel\Sliderpages');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
