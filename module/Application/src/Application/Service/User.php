<?php

namespace Application\Service;

use Application\Entity\User as UserEntity;

use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\Stdlib\Hydrator\ClassMethods;
use Doctrine\ORM\EntityManager;

class User 
{
    protected $objectManager;

    public function __construct(\Doctrine\ORM\EntityManager $objectManager)
    {
        $this->setObjectManager($objectManager);
    }

    public function findById($id)
    {
        $id = 1;
        return $this->objectManager->find('Application\Entity\User',$id);
    }
    
    public function setObjectManager($objectManager){
        $this->objectManager = $objectManager;
    }

    

}
