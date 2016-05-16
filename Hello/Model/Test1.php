<?php
namespace Excellence\Hello\Model;
class Test1 extends \Magento\Framework\Model\AbstractModel implements Test1Interface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'excellence_hello_test1';

    protected function _construct()
    {
        $this->_init('Excellence\Hello\Model\ResourceModel\Test1');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function deleteById($id){
        if($id){
            return $this->load($id)->delete();
        }
    }
    public function getDataById($id){
        if($id){
            return $this->load($id)->getData();
        }
    }
    public function saveAddress($data,$uid)
    {
        $model = $this->load($uid);
        $model->setData('address',$data);
        return $model->save();
    }
     public function searchData($srch)
    {
        if(!empty($srch)){
            $data = $this->getCollection()
                        ->addFieldToFilter(
                                array('address'),
                                array(
                                    
                                    array('like'=>'%'.$srch.'%')
                                )
                            )
                        ->setOrder('id', 'DESC');
            return $data;
              
              
        }
    }
    public function getTableData()
    {
        return $this->getCollection()->setOrder('id', 'DESC');
    }
}
