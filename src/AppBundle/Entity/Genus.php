<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *  @ORM\Entity
 * @ORM\Table(name="genus")
 */
class Genus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $name;
    
    /**
     * @ORM\Column(type="string")
     */
    private $subFamily;
    /**
     * @ORM\Column(type="integer")
     */
    private $speciesCount;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $funFact;
    
    public function getSubFamily() {
        return $this->subFamily;
    }

    public function getSpeciesCount() {
        return $this->speciesCount;
    }

    public function getFunFact() {
        return $this->funFact;
    }

    public function setSubFamily($subFamily) {
        $this->subFamily = $subFamily;
        return $this;
    }

    public function setSpeciesCount($speciesCount) {
        $this->speciesCount = $speciesCount;
        return $this;
    }

    public function setFunFact($funFact) {
        $this->funFact = $funFact;
        return $this;
    }

        public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    
     public function getUpdatedAt()
    {
        return new \DateTime('-'.rand(0, 100).' days');
    }

}