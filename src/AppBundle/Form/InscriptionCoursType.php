<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class InscriptionCoursType extends AbstractType
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
            ->add('danseur','entity', [
                'class'         => 'AppBundle\Entity\User',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('u');

                    return $qb
                        ->andWhere($qb->expr()->eq('u.prenom', ':prenom'))
                        ->orderBy('u.nom', 'ASC')
                        ->setParameter('prenom', true);
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
            'data_class' => 'AppBundle\Entity\User'
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