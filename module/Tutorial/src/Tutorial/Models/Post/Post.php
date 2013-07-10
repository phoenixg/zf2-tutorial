<?php
namespace Tutorial\Models\Post;

use Tutorial\Models;

class Post extends Models\DomainModelAbstract {
    /**
     * @var string
     */
    private $_title;

    /**
     * @param $title
     * @return Post
     */
    public function setTitle($title){
        $this->_title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->_title;
    }

    /**
     * @param $id
     * @return Post
     */
    public function setId($id) {
        $this->_id;
        return $this;
    }
}