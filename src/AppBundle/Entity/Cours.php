<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 */
class Cours
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateCours;

    /**
     * @var \DateTime
     */
    private $heureDebut;

    /**
     * @var \DateTime
     */
    private $heureFin;

    /**
     * @var int
     */
    private $nombreDanseursMax;


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
     * Set dateCours
     *
     * @param \DateTime $dateCours
     * @return Cours
     */
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    /**
     * Get dateCours
     *
     * @return \DateTime 
     */
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     * @return Cours
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime 
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     * @return Cours
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set nombreDanseursMax
     *
     * @param integer $nombreDanseursMax
     * @return Cours
     */
    public function setNombreDanseursMax($nombreDanseursMax)
    {
        $this->nombreDanseursMax = $nombreDanseursMax;

        return $this;
    }

    /**
     * Get nombreDanseursMax
     *
     * @return integer 
     */
    public function getNombreDanseursMax()
    {
        return $this->nombreDanseursMax;
    }
}
