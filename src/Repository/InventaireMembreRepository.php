<?php

namespace App\Repository;

use App\Entity\InventaireMembre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InventaireMembre>
 *
 * @method InventaireMembre|null find($id, $lockMode = null, $lockVersion = null)
 * @method InventaireMembre|null findOneBy(array $criteria, array $orderBy = null)
 * @method InventaireMembre[]    findAll()
 * @method InventaireMembre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InventaireMembreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InventaireMembre::class);
    }

//    /**
//     * @return InventaireMembre[] Returns an array of InventaireMembre objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InventaireMembre
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
