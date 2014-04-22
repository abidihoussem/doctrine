<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    protected $userService;
    
    public function indexAction() {
//        $objectManager = $this
//                ->getServiceLocator()
//                ->get('Doctrine\ORM\EntityManager');
//
//        $user = new \Application\Entity\User();
//        $user->setFullName('Marco Pivetta');
//
//        $objectManager->persist($user);
//        $objectManager->flush();
//
//        return new ViewModel();
//        die(var_dump($user->getId())); // yes, I'm lazy
//        $useId = $this->params('id');
//        $user = $this->getUserService()->findById($useId);
        return new ViewModel(/*array('user'=>$user)*/);
    }
    
    public function getUserService()
    {
        if (!isset($this->userService)) {
            $this->userService = $this->getServiceLocator()->get('Application\Service\User');
        }

        return $this->userService;
    }

    public function setUserService($userService)
    {
        $this->userService = $userService;
        return $this;
    }

}
