<?php
namespace Tutorial\Models\Post;

use Tutorial\Models\IdentityMapAbstract;

class IdentityMap extends IdentityMapAbstract {
    public function __construct(DataMapperInterface $dm) {
        $this->_dataMapper = $dm;
        return $this;
    }

    /**
     * @param $id
     * @return bool
     */
    private function isPostCached($id) {

    }

    /**
     * @param $id
     * @return Post
     */
    private function fetchPostById($id) {

    }
}