<?php
namespace Excellence\Hello\Model\ResourceModel;
class Test1 extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_hello_test1','id');
    }

  public function joinUs()
  {
    $table = $this->getMainTable();
    $table2 = $this->getTable('excellence_hello_test');
    $cond = $this->getConnection()->quoteInto('t1.id = t2.id','');
    $select = $this->getConnection()->select()->from(array('t1'=>$table))->join(array('t2'=>$table2), $cond);
    $collection=$this->getConnection($select)->fetchAll($select);
    return $collection;

  }
}
