<?php
namespace Application\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class User {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;

      /** @ORM\ManyToOne(targetEntity="Address") */
    protected $address;

    /** @ORM\ManyToMany(targetEntity="Project") */
    protected $projects;
    
    
    

    public function __construct()
    {
        $this->projects = new ArrayCollection;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function setAddress($address) {
        $this->address = $address;
    }
    public function setProjects($projects) {
        $this->projects = $projects;
    }
    public function setFullName($fullName) {
        $this->fullName = $fullName;
    }
    
    public function getId() {
        return $this->id ;
    }
    
    public function getAddress() {
        return $this->address ;
    }
    public function getProjects() {
        return $this->projects ;
    }
    public function getFullName() {
        return $this->fullName ;
    }
    // getters/setters
}

