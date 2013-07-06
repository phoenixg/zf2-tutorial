<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Tutorial\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BlogController extends AbstractActionController
{
    public function postAction()
    {
    	$postId = $this->getEvent()->getRouteMatch()->getParam('postId');
    	var_dump($postId);// 不用var_dump，用xdebug+eclipse可以在调试窗口输出。试试看phpstorm
        return new ViewModel();
    }
}
