<?php

namespace App\Repository;

use App\Entity\KanbanFileHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KanbanFileHistory>
 *
 * @method KanbanFileHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method KanbanFileHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method KanbanFileHistory[]    findAll()
 * @method KanbanFileHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KanbanFileHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KanbanFileHistory::class);
    }

//    /**
//     * @return KanbanFileHistory[] Returns an array of KanbanFileHistory objects
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

//    public function findOneBySomeField($value): ?KanbanFileHistory
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
