<?php

namespace App\Repository;

use App\Entity\KanbanFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KanbanFile>
 *
 * @method KanbanFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method KanbanFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method KanbanFile[]    findAll()
 * @method KanbanFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KanbanFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KanbanFile::class);
    }

//    /**
//     * @return KanbanFile[] Returns an array of KanbanFile objects
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

//    public function findOneBySomeField($value): ?KanbanFile
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
