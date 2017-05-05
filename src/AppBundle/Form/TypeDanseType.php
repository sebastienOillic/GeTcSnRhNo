<?php

namespace AppBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypeDanseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', [
                'label' => 'Nom',
            ])
            ->add('description', 'textarea', [
                'attr' => [
                    'rows' => 8,
                ]
            ])
            ->add('styleDanses', 'entity', [
                'class'         => 'AppBundle\Entity\StyleDanse',
                'multiple'      => true,
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('s');
                    return $qb;
                }
            ])
            ->add('users', 'entity', [
                'class'         => 'AppBundle\Entity\User',
                'multiple'      => true,
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('u');
                    return $qb;
                }
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\TypeDanse',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_typeDanse';
    }
}
