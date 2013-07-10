<?php
namespace Tutorial\Models;

use Zend\Db\Adapter\Adapter;

class DataMapperAbstract {
    /**
     * @var \Zend\Db\Adapter\Adapter
     */
    protected $_dbCon;

    public function __construct(Adapter $dbAdapter){
        $this->_dbCon = $dbAdapter;
    }
}