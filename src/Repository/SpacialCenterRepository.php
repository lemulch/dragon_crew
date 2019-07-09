<?php

namespace App\Repository;

use App\Entity\SpacialCenter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SpacialCenter|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpacialCenter|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpacialCenter[]    findAll()
 * @method SpacialCenter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpacialCenterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SpacialCenter::class);
    }

    // /**
    //  * @return SpacialCenter[] Returns an array of SpacialCenter objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SpacialCenter
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
