<?php
/**
 * Created by PhpStorm.
 * User: PC Dell
 * Date: 10/05/2017
 * Time: 10:11
 */

namespace AppBundle\Repository;
use AppBundle\Entity\User;
use AppBundle\Entity\Cours;



use Doctrine\ORM\EntityRepository;

class InscriptionCoursRepository extends EntityRepository
{

    public function findByCours(Cours $cours)
    {
        $qb = $this->createQueryBuilder('i');

        return $qb
            ->where($qb->expr()->eq('i.cours', ':cours'))
            ->getQuery()
            ->setParameter('cours', $cours)
            ->getResult();
    }





//    public function findByDanseur(Cours $user)
//    {
//        $qb = $this->createQueryBuilder('i');
//
//        return $qb
//            ->where($qb->expr()->eq('i.user', ':user'))
//            ->getQuery()
//            ->setParameter('user', $user)
//            ->getResult();
//    }





}