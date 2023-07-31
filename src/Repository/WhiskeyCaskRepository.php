<?php

namespace App\Repository;

use App\Entity\WhiskeyCask;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WhiskeyCask>
 *
 * @method WhiskeyCask|null find($id, $lockMode = null, $lockVersion = null)
 * @method WhiskeyCask|null findOneBy(array $criteria, array $orderBy = null)
 * @method WhiskeyCask[]    findAll()
 * @method WhiskeyCask[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WhiskeyCaskRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WhiskeyCask::class);
    }

//    /**
//     * @return WhiskeyCask[] Returns an array of WhiskeyCask objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WhiskeyCask
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
