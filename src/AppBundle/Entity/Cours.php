<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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

    private $typeDanse;

    private $salle;

    private $niveau;

    private $evenement;

    private $avis;

    /**
     * Cours constructor.
     * @param $avis
     */
    public function __construct($avis)
    {
        $this->avis = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getAvis()
    {
        return $this->avis;
    }

    /**
     * @param mixed $avis
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;
    }


    /**
     * @return mixed
     */
    public function getTypeDanse()
    {
        return $this->typeDanse;
    }

    /**
     * @param mixed $typeDanse
     */
    public function setTypeDanse($typeDanse)
    {
        $this->typeDanse = $typeDanse;
    }

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * @param mixed $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * @return mixed
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * @param mixed $evenement
     */
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;
    }


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


    public function addAvis(Avis $avis){

        if(!$this->avis->contains($avis)){

            $this->avis->add($avis);
            $avis->setCours($avis);
        }
        return $this;
    }

    public function removeAvis(Avis $avis)
    {
        if ($this->avis->contains($avis)) {
            $this->avis->removeElement($avis);
            $avis->setCours(null);
        }

        return $this;
    }

}