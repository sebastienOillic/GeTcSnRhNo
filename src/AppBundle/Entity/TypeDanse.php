<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TypeDanse
 */
class TypeDanse
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    private $styleDanses;

    private $description;

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
     * TypeDanse constructor.
     * @param $styleDanses
     */
    public function __construct($styleDanses)
    {
        $this->styleDanses = new ArrayCollection();
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

    /**
     * Set description
     *
     * @param string $description
     * @return TypeDanse
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
        if ($this->styleDanses->contains($styleDanse)) {
            $this->styleDanses->removeElement($styleDanse);
            $styleDanse->removeTypeDanse($this);
        }

        return $this;
    }

}
