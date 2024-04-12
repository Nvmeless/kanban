<?php

namespace App\Repository;

use App\Entity\LabelHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LabelHistory>
 *
 * @method LabelHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method LabelHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method LabelHistory[]    findAll()
 * @method LabelHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LabelHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LabelHistory::class);
    }

//    /**
//     * @return LabelHistory[] Returns an array of LabelHistory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('k.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LabelHistory
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
