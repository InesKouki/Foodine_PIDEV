<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    // /**
    //  * @return Product[] Returns an array of Product objects
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
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findById($id)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.id = :val')
            ->setParameter('val', $id)

            ->getQuery()
            ->getOneOrNullResult();
    }


    public function findByCategorie($id)
    {
     $em=$this->getEntityManager();
     $q=$em
         ->createQuery('SELECT p FROM APP\Entity\Product p JOIN p.category c WHERE c.id=:id')
  ->setParameter('id', $id);

     return $q->getResult();
    }

    public function findProductByName($nom){
        return $this->createQueryBuilder('prod')
            ->where('prod.name LIKE :nom')
            ->setParameter('nom', '%'.$nom.'%')
            ->getQuery()->getResult();
    }


    function orderByNomDescQB(){
        return $this->createQueryBuilder('ev')
            -> orderBy('ev.name','DESC')
            -> getQuery()->getResult();
    }

    function orderByNomAscQB(){
        return $this->createQueryBuilder('ev')
            -> orderBy('ev.name','ASC')
            -> getQuery()->getResult();
    }

    function orderByPriceAscQB(){
        return $this->createQueryBuilder('ev')
            -> orderBy('ev.price','ASC')
            -> getQuery()->getResult();
    }

    function orderByPriceDescQB(){
        return $this->createQueryBuilder('ev')
            -> orderBy('ev.price','DESC')
            -> getQuery()->getResult();
    }


}
