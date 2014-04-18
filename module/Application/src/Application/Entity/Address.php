<?php
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class Address {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    
    protected $id;

    /** @ORM\Column(type="string") */
    protected $country;
    
    /** @ORM\ManyToOne(targetEntity="City") */
    protected $city;
    public function getId() {
        return $this->id;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getCity() {
        return $this->city;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    
    // getters/setters etc.
}

