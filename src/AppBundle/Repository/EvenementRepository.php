<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Evenement;

/**
 * EvenementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvenementRepository extends EntityRepository
{

    /**
     * Finds typeDanse by styleDanse.
     *
     * @param int $limit
     *
     * @return \AppBundle\Entity\Evenement[]
     */
    public function getFutureEvents(int $limit = 0){
        $qb = $this->createQueryBuilder('e');
        $now = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        $qb =  $qb->select('e')
            ->where("e.dateFin > '".$now->format("Y-m-d H:i:s"). "'")
            ->orderBy('e.dateDebut');
        if ($limit > 0){
            $qb = $qb->setMaxResults($limit);
        }
        return $qb->getQuery()
            ->getResult();
    }
}
