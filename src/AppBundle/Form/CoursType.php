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
             ->add('typeDanse')
             ->add('niveau')
             ->add('dateCours','date', ['format' => 'dd/MM/yyyy',])
             ->add('heureDebut')
             ->add('heureFin')
             ->add('nombreDanseursMax')
             ->add('salle','choice')
             ->add('referent')
             ->add('animateurs')
             //->add('evenement')
            // ->add('danseurs')
             ;
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
