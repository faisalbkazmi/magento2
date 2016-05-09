<?php
namespace Excellence\Hello\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
  protected function _construct()
  {
    $this->_init('excellence_hello_test','id');
  }
  public function loadByTitle($title){
    $table = $this->getMainTable();
    $where = $this->getConnection()->quoteInto("title = ?", $title);
    $sql = $this->getConnection()->select()->from($table,array('excellence_hello_test_id'))->where($where);
    $id = $this->getConnection()->fetchOne($sql);
    return $id;
  }

  public function joinUs()
  {
    $table = $this->getMainTable();
    $table2 = $this->getTable('excellence_hello_tbl');
    $cond = $this->_getConnection()->quoteInto('t1.id = t2.id','');
    $where = $this->_getConnection()->quoteInto('t1.id = t2.id','');
    $select = $this->_getConnection()->select()->from(array('t1'=>$table))->join(array('t2'=>$table2), $cond)->where($where);
    $collection=$this->getConnection($select)->fetchAll($select);
    return $collection; 

  }
}


