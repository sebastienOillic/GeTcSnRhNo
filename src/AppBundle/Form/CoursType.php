<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
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
             ->add('typeDanse', 'entity', [
                'class'         => 'AppBundle\Entity\TypeDanse',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('t');

                    return $qb
                        ->orderBy('t.nom', 'ASC');
                },
            ])
             ->add('niveau','entity', [
                'class'         => 'AppBundle\Entity\Niveau',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('n');

                    return $qb
                        ->orderBy('n.nom', 'ASC');
                },
            ])

             ->add('dateCours','date', ['format' => " dd/MM/yyyy",])
             ->add('heureDebut')
             ->add('heureFin')
             ->add('nombreDanseursMax')
             ->add('salle','entity', [
                'class'         => 'AppBundle\Entity\Salle',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('s');

                    return $qb
                        ->orderBy('s.nom', 'ASC');
                },
            ])
             ->add('referent','entity', [
                'class'         => 'AppBundle\Entity\User',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('u');

                    return $qb
                        ->orderBy('u.nom', 'ASC');
                         },
            ])
             ->add('animateurs','entity', [
                'class'         => 'AppBundle\Entity\User',
                'multiple' => true,
                'expanded' => true,
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('u');

                    return $qb
                        ->orderBy('u.nom', 'ASC');
                         },
            ])
             //->add('evenement')
            // ->add('danseurs')
            ->add('danseur','entity', [
                'class'         => 'AppBundle\Entity\User',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('u');

                    return $qb
                        ->orderBy('u.nom', 'ASC');
                         },
            ])
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
