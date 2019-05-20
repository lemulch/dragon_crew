<?php

namespace App\Repository;

use App\Entity\SpatialCenter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SpatialCenter|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpatialCenter|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpatialCenter[]    findAll()
 * @method SpatialCenter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpatialCenterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SpatialCenter::class);
    }

    // /**
    //  * @return SpatialCenter[] Returns an array of SpatialCenter objects
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
    public function findOneBySomeField($value): ?SpatialCenter
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
