<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Darbuotojai")
 */
class Darbuotojas
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
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="projektas", inversedBy="darbuotojai")
     * @ORM\JoinColumn(name="projektoID", referencedColumnName="id")
     */
    public $projektas;





    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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
