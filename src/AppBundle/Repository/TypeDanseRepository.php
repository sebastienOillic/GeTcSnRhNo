<?php

namespace AppBundle\Repository;

use AppBundle\Entity\StyleDanse;
use Doctrine\ORM\EntityRepository;

/**
 * TypeDanseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TypeDanseRepository extends EntityRepository
{
    /**
    * Finds typeDanse by styleDanse.
    *
    * @param StyleDanse $styleDanse
    *
    * @return \AppBundle\Entity\TypeDanse[]
    */
    public function findByStyleDanse(StyleDanse $styleDanse)
    {
        $qb = $this->createQueryBuilder('t');

        return $qb
            ->where($qb->expr()->eq('t.styleDanse', ':styleDanse'))
            ->getQuery()
            ->setParameter('styleDanse', $styleDanse)
            ->getResult();
    }
}
