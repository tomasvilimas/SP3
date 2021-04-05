<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="Projektai")
 */
class Projektas
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Darbuotojas")
     * @ORM\JoinColumn(name="darbuotojo_id", referencedColumnName="id")
     */
    private $darbuotojas;


    

    public function getId(){
        return $this->id;
    }

    public function getname(){
        return $this->name;
    }

    
    public function setName($name){
        $this->name = $name;
    }

    public function getDarbuotojas(){
        return $this->name;
    }

    
    public function setDarbuotojas($name){
        $this->name = $name;
    }

   
    
}

