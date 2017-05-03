<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * StyleDanse
 */
class StyleDanse
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;
    
    private $description;

    private $typeDanses;

    /**
     * @return ArrayCollection
     */
    public function getTypeDanses()
    {
        return $this->typeDanses;
    }

    /**
     * @param ArrayCollection $typeDanses
     */
    public function setTypeDanses($typeDanses)
    {
        $this->typeDanses = $typeDanses;
    }

    /**
     * TypeDanse constructor.
     * @param $typeDanses
     */
    public function __construct()
    {
        $this->typeDanses = new TypeDanse();
    }

    public function __toString()
    {
        return $this->nom;
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
     * @return StyleDanse
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


    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

  public function addTypeDanse(TypeDanse $typeDanse){

      if(!$this->typeDanses->contains($typeDanse)){

          $this->typeDanses->add($typeDanse);
          $typeDanse->addStyleDanse($this);
      }
      return $this;
  }

    public function removeTypeDanse(TypeDanse $typeDanse)
    {
        if ($this->typeDanses->contains($typeDanse)) {
            $this->typeDanses->removeElement($typeDanse);
            $typeDanse->removeStyleDanse($this);
        }

        return $this;
    }


}
