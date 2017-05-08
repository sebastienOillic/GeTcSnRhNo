<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionCoursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
             ->add('cours', 'entity', [
                'class'         => 'AppBundle\Entity\TypeDanse',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('c');

                    return $qb
                        ->orderBy('c.typeDanse', 'ASC');
                },
            ])
            ->add('danseur','entity', [
                'class'         => 'AppBundle\Entity\User',
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('u');

                    return $qb
                        ->orderBy('u.nom', 'ASC');
                         },
            ]);
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