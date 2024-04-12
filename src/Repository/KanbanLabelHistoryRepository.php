<?php

namespace App\Repository;

use App\Entity\KanbanLabelHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KanbanLabelHistory>
 *
 * @method KanbanLabelHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method KanbanLabelHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method KanbanLabelHistory[]    findAll()
 * @method KanbanLabelHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KanbanLabelHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KanbanLabelHistory::class);
    }

//    /**
//     * @return KanbanLabelHistory[] Returns an array of KanbanLabelHistory objects
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

//    public function findOneBySomeField($value): ?KanbanLabelHistory
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
