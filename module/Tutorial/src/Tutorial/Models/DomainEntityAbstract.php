<?php

namespace Tutorial\Models;
abstract class DomainModelAbstract {
    protected $_id;

    public function getId(){
        return $this->_id;
    }
}