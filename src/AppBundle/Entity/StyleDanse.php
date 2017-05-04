<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Event\PreUpdateEventArgs;

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
     * @var string
     */
    private $slug;

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

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return TypeDanse
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Pre persist (create only) event callback.
     *
     * Called by doctrine: see lifecycleCallbacks in the mapping file.
     * @see src/AppBundle/Resources/config/doctrine/TypeDanse.orm.yml
     */
    public function onPrePersist()
    {
        $this->updateSlug();
    }

    /**
     * Pre update event callback.
     *
     * Called by doctrine: see lifecycleCallbacks in the mapping file.
     * @see src/AppBundle/Resources/config/doctrine/TypeDanse.orm.yml
     *
     * @param PreUpdateEventArgs $event
     */
    public function onPreUpdate(PreUpdateEventArgs $event)
    {
        // The PreUpdateEventArgs allow us to track if some properties has been changed
        if ($event->hasChangedField('nom')) {
            $this->updateSlug();
        }
    }

    /**
     * Updates the slug from the nom.
     */
    private function updateSlug()
    {
        // Turns 'This is a great TypeDanse' into 'this-is-a-great-TypeDanse'
        $slug = Transliterator::urlize($this->getTitle());

        $this->setSlug($slug);
    }


}
