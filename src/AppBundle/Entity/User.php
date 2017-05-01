<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var int
     */
    protected $id;

    private $nom;

    private $prenom;

    private $sex;

    private $avis;

    /**
     * @return int
     */

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Add avis
     *
     * @param \AppBundle\Entity\Avis $avis
     * @return User
     */
    public function addAvi(\AppBundle\Entity\Avis $avis)
    {
        $this->avis[] = $avis;

        return $this;
    }

    /**
     * Remove avis
     *
     * @param \AppBundle\Entity\Avis $avis
     */
    public function removeAvi(\AppBundle\Entity\Avis $avis)
    {
        $this->avis->removeElement($avis);
    }

    /**
     * Get avis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAvis()
    {
        return $this->avis;
    }
}
