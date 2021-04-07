<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;


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
     * One product has many features. This is the inverse side.
     * @ORM\OneToMany(targetEntity="darbuotojas", mappedBy="projektas")
     */
    public $darbuotojas;

    public function __construct()
    {
        $this->darbuotojas = new ArrayCollection();
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDarbuotojas()
    {
        return $this->darbuotojas;
    }

    public function setDarbuotojas($darbuotojas)
    {
        $this->darbuotojas = $darbuotojas;
    }
    public function getProjektas()
    {
        return $this->Projektas;
    }

    public function setProjektas($Projektas)
    {
        $this->Projektas = $Projektas;
    }
}
