<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label'     => 'Nom',
                'required'  => true
            ])
            ->add('description', TextareaType::class, [
                'label'     => 'Description',
                'required'  => true
            ])
            ->add('lieu', TextType::class, [
                'label'     => 'Lieu',
                'required'  => true
            ])
            ->add('dateDebut', DateType::class, [
                'label'     => 'Date de début',
                'required'  => true
            ])
            ->add('dateFin', DateType::class, [
                'label'     => 'Date de fin',
                'required'  => true
            ])
            ->add('image', FileType::class, [
                'label'     => 'Affiche / Poster (fichier jpg ou jpeg)',
                'required'  => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => \AppBundle\Entity\Evenement::class,
        ));
    }

    
}