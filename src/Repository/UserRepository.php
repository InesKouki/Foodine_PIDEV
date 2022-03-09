<?php

namespace App\Repository;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    */

    public function findOnlyUsers()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.Roles LIKE :val')
            ->setParameter('val','[]')
            ->getQuery()
            ->getResult();

        ;
    }


    public function findUsers()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.Roles NOT LIKE :val')
            ->setParameter('val','["ROLE_ADMIN"]')
            ->getQuery()
            ->getResult();

        ;
    }
    public function findChef()
    {
        return $this->createQueryBuilder('u')
            ->Where('u.Roles LIKE :val')
            ->setParameter('val','["ROLE_CHEF"]')
            ->getQuery()
            ->getResult();

        ;
    }
   /* public function findClients()
    {

        return $this->createQueryBuilder('u')

            ->Where('u.Roles LIKE :val')
            ->setParameter('val','[]')
            ->getQuery()
            ->getResult();

        ;
    }*/

    public function findEmail($data)
    {
        return $this->createQueryBuilder('u')
            ->Where('u.email=:val')
            ->setParameter('val',$data)
            ->getQuery()
            ->getResult();

        ;
    }

    public function trierNomASC(){
       $em=$this->getEntityManager();
       $query=$em->createQueryBuilder('SELECT u FROM App\Entity\User u WHERE u.nom ASC');
       return $query->getQuery();
    }

    public function nbsClient(){
       return $this->createQueryBuilder('u')
           ->select('count(u.id)')
           ->where('u.Roles LIKE :val')
           ->setParameter('val','[]')
           ->getQuery()
           ->getSingleScalarResult();
    }

    public function findChefByValue($str){
        return $this->createQueryBuilder('u')

            ->andWhere('u.Nom LIKE :str')
            ->orWhere('u.Prenom LIKE :str')
            ->orWhere('u.Username LIKE :str')
            ->setParameter('str', '%'.$str.'%')
            ->andWhere('u.Roles LIKE :role')
            ->setParameter('role','["ROLE_CHEF"]')
            ->getQuery()
            ->getResult();
    }
    public function findUserByValue($str){
        return $this->createQueryBuilder('u')

            ->andWhere('u.Nom LIKE :str')
            ->orWhere('u.Prenom LIKE :str')
            ->orWhere('u.Username LIKE :str')
            ->setParameter('str', '%'.$str.'%')
            ->andWhere('u.Roles NOT LIKE :role')
            ->setParameter('role','["ROLE_ADMIN"]')
            ->getQuery()
            ->getResult();
    }

    public function nbsChef(){
        return $this->createQueryBuilder('u')
            ->select('count(u.id)')
            ->where('u.Roles LIKE :val')
            ->setParameter('val','["ROLE_CHEF"]')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function nbsLivreur(){
        return $this->createQueryBuilder('u')
            ->select('count(u.id)')
            ->where('u.Roles LIKE :val')
            ->setParameter('val','["ROLE_LIVREUR"]')
            ->getQuery()
            ->getSingleScalarResult();
    }




}
