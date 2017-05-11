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

    private $danseurs;

    private $animateurs;

    private $referent;

    /**
     * Cours constructor.
     * @param $avis
     */
    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->danseurs = new ArrayCollection();
        $this->animateurs = new ArrayCollection();
    }

    public function __toString()
    {
        return 'cours';
    }

    /**
     * @return ArrayCollection
     */
    public function getDanseurs()
    {
        return $this->danseurs;
    }

    /**
     * @return ArrayCollection
     */
    public function getAnimateurs()
    {
        return $this->animateurs;
    }

    /**
     * @return mixed
     */
    public function getReferent()
    {
        return $this->referent;
    }

    /**
     * @param mixed $referent
     */
    public function setReferent($referent)
    {
        $this->referent = $referent;
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
        }

        return $this;
    }

    public function addDanseur(User $danseur){

        if(!$this->danseurs->contains($danseur)){

            $this->danseurs->add($danseur);
            $danseur->addCours($this);
        }
        return $this;
    }

    public function removeDanseur(User $danseur)
    {
        if ($this->danseurs->contains($danseur)) {
            $this->danseurs->removeElement($danseur);
//            $danseur->removeCours($this);
        }

        return $this;
    }

    public function addAnimateur(User $animateur)
    {
        if(!$this->danseurs->contains($animateur)){
            $this->danseurs->add($animateur);
            $animateur->addCours($this);
        }
        return $this;
    }

    public function removeAnimateur(User $animateur)
    {
        if ($this->animateurs->contains($animateur)) {
            $this->animateurs->removeElement($animateur);
//            $animateur->removeCours($this);
        }

        return $this;
    }
}
