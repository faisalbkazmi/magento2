<?php
namespace Excellence\Hello\Model\Config\Source;

class Custom implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [['value' => 0, 'label' => __('First')], 
        		['value' => 1, 'label' => __('Second')], 
        		['value' => 2, 'label' => __('Third')]];
    }
}
