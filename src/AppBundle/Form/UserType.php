<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe')
            ->add('email')
            //->add('adherent')
            ->add('typeDanses','entity', [
                'class'         => 'AppBundle\Entity\TypeDanse',
                'multiple' => true,
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('t');

                    return $qb
                        ->orderBy('t.nom', 'ASC');
                         },
            ])
            ->add('coursAnimes','entity', [
                'class'         => 'AppBundle\Entity\Cours',
                'multiple' => true,
                'query_builder' => function (EntityRepository $repository) {
                    $qb = $repository->createQueryBuilder('c');

                    return $qb
                        ->orderBy('c.typeDanse', 'ASC');
                         },
            ]);
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
        return 'appbundle_user';
    }


}
