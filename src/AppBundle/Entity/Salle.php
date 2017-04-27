<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 */
class Salle
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param integer $nom
     * @return Salle
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return integer 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
