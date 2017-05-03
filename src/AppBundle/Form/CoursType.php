<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('dateCours')
             ->add('heureDebut')
             ->add('heureFin')
             ->add('nombreDanseursMax')
             ->add('typeDanse')
             ->add('niveau')
             ->add('salle')
             ->add('evenement')
             ->add('referent')
            // ->add('danseurs')
             ->add('animateurs');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cours'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cours';
    }


}
