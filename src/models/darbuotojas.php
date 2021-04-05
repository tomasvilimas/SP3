<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

// /**
//  * @ORM\Entity
//  * @ORM\Table(name="Darbuotojai")
//  */
// class Darbuotojas
// {
//     /** 
//      * @ORM\Id
//      * @ORM\Column(type="integer")
//      * @ORM\GeneratedValue
//      */
//     protected $id;

//     /** 
//      * @ORM\Column(type="string")
//      */
//     protected $name;

//     public function getId()
//     {
//         return $this->id;
//     }

//     public function getname()
//     {
//         return $this->name;
//     }


//     public function setName($name)
//     {
//         $this->name = $name;
//     }



//     public function getDarbuotojas()
//     {
//         return $this->name;
//     }


//     public function setDarbuotojas($name)
//     {
//         $this->name = $name;
//     }

//     public function __construct()
//     {
//     }
// }


// }
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
    protected $Name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function getId()
    {
        return $this->id;
    }

    
}
