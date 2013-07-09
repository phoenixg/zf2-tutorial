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
use Tutorial\Models;

class PostController extends AbstractActionController
{
    public function viewAction()
    {
        //$pdm = new Models\PostDataMapper();
        $pdm = $this->getServiceLocator()->get('PostDataMapper');
        $pim= $this->getServiceLocator()->get('PostIdentityMap');
        echo '<pre>';var_dump($pdm);echo '</pre>';
        echo '<br />';
        echo '<pre>';var_dump($pim);echo '</pre>';

    	$postId = $this->getEvent()->getRouteMatch()->getParam('postId');
    	var_dump($postId);// 不用var_dump，用xdebug+eclipse可以在调试窗口输出。试试看phpstorm

        //$pdm->getPostById($postId);

        $viewObj = new ViewModel(array(
            'title' => 'Main Content',
            'content' => 'Actual Content'

        ));

        return $viewObj;
    }
}
