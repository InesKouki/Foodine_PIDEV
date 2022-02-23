<?php

namespace App\Repository;

use App\Entity\Promotion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Promotion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Promotion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Promotion[]    findAll()
 * @method Promotion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromotionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Promotion::class);
    }

    function orderByNameAscQB(){
        return $this->createQueryBuilder('pr')
            ->join('pr.evenement','ev')
            -> orderBy('ev.name','ASC')
            -> getQuery()->getResult();
    }

    function orderByNameDescQB(){
        return $this->createQueryBuilder('pr')
            ->join('pr.evenement','ev')
            -> orderBy('ev.name','DESC')
            -> getQuery()->getResult();
    }

    function orderByPourcentageAscQB(){
        return $this->createQueryBuilder('pr')
            -> orderBy('pr.pourcentage','ASC')
            -> getQuery()->getResult();
    }

    function orderByPourcentageDescQB(){
        return $this->createQueryBuilder('pr')
            -> orderBy('pr.pourcentage','DESC')
            -> getQuery()->getResult();
    }

    function getPromotionsByEventId($id){
        return $this->createQueryBuilder('s')
            ->join('s.evenement','c')
            ->addSelect('c')
            ->where('c.id=:id')
            ->setParameter('id',$id)
//            ->orderBy('s.date','ASC')
            ->getQuery()->getResult();
    }



    // /**
    //  * @return Promotion[] Returns an array of Promotion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Promotion
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
