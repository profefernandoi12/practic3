<?php

namespace App\Repository;

use App\Entity\Correlativa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Correlativa>
 *
 * @method Correlativa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Correlativa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Correlativa[]    findAll()
 * @method Correlativa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CorrelativaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Correlativa::class);
    }

//    /**
//     * @return Correlativa[] Returns an array of Correlativa objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Correlativa
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
