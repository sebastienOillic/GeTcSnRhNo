<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
* TypeDanse
*/
class TypeDanse
{
    /**
     * @var int
     */
    private $id;

    private $nom;

    private $styleDanses;

    private $users;

    private $description;

    /**
     * TypeDanse constructor.
     * @param $styleDanses
     */
    public function __construct()
    {
        $this->styleDanses = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

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
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }    
    /**
     * @return ArrayCollection
     */
    public function getStyleDanses()
    {
        return $this->styleDanses;
    }
    /**
     * @param ArrayCollection $styleDanses
     */
    public function setStyleDanses($styleDanses)
    {
        $this->styleDanses = $styleDanses;
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
     * Set nom
     *
     * @param string $nom
     * @return TypeDanse
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

    public function addStyleDanse(StyleDanse $styleDanse)
    {
        if (!$this->styleDanses->contains($styleDanse)) {
            $this->styleDanses->add($styleDanse);
            $styleDanse->addTypeDanse($this);
        }
        return $this;
    }

    public function removeStyleDanse(StyleDanse $styleDanse)
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }
        return $this;
    }
}