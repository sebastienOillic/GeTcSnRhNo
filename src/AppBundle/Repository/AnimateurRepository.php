<?php

namespace AppBundle\Repository;

use AppBundle\Entity\TypeDanse;
use AppBundle\Entity\Cours;
use Doctrine\ORM\EntityRepository;

/**
 * CoursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CoursRepository extends EntityRepository
{
     public function findByTypeDanse(TypeDanse $typeDanse)
     {
        $qb = $this->createQueryBuilder('u');

        return $qb
            ->where($qb->expr()->eq('u.typeDanse', ':typeDanse'))
            ->getQuery()
            ->setParameter('typeDanse', $typeDanse)
            ->getResult();
     }

     public function findByCoursAnimes(Cours $cours)
     {
        $qb = $this->createQueryBuilder('u');

        return $qb
            ->where($qb->expr()->eq('u.cours', ':cours'))
            ->getQuery()
            ->setParameter('cours', $cours)
            ->getResult();
     }
}
