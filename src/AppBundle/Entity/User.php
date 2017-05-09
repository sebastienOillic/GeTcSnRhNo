<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    private $nom;

    private $prenom;

    private $sexe;

    private $cours;

    private $coursAnimes;

    private $typeDanses;

    private $adherent;

    /**
     * TypeDanse toString
     * @return string
     */
    public function __toString()
    {
        return $this->nom;
    }
    
    /**
     * @return mixed
     */
    public function getCoursAnimes()
    {
        return $this->coursAnimes;
    }

    /**
     * @return mixed
     */
    public function getTypeDanses()
    {
        return $this->typeDanses;
    }

    /**
     * @param mixed $typeDanses
     */
    public function addTypeDanse(TypeDanse $typeDanse)
    {
        if (!$this->typeDanses->contains($typeDanse)) {
            $this->typeDanses->add($typeDanse);
        }
        return $this;
    }

    public function removeTypeDanse(TypeDanse $typeDanse)
    {
        if ($this->typeDanses->contains($typeDanse)) {
            $this->typeDanses->removeElement($typeDanse);
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * @param mixed $cours
     */
    public function setCours($cours)
    {
        $this->cours = $cours;

    }

    /**
     * @var string
     */

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @var string
     */

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @var string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function addCours(Cours $cours)
    {
        if (!$this->cours->contains($cours)) {

            $this->cours->add($cours);
            $cours->addDanseur($this);
        }
        return $this;
    }

    public function removeCours(Cours $cours)
    {
        if ($this->cours->contains($cours)) {
            $this->cours->removeElement($cours);
            //$cours->removeDanseur($this);
        }

        return $this;
    }

    public function addCoursAnime(Cours $coursAnime)
    {
        if (!$this->coursAnimes->contains($coursAnime)) {

            $this->coursAnimes->add($coursAnime);
//            $coursAnime->addAnimateur($this);
        }
        return $this;
    }

    public function removeCoursAnime(Cours $coursAnime)
    {
        if ($this->coursAnimes->contains($coursAnime)) {
            $this->coursAnimes->removeElement($coursAnime);
            //$coursAnime->removeAnimateur($this);
        }
        return $this;
    }

    /**
     * Set adherent
     *
     * @param bool $adherent
     *
     * @return 
     */
    public function setAdherent($adherent)
    {
        $this->adherent = (bool)$adherent;

        return $this;
    }

    /**
     * Get adherent
     *
     * @return bool
     */
    public function getAdherent()
    {
        return $this->adherent;
    }

}
