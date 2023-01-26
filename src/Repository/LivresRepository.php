<?php

namespace App\Repository;

use App\Entity\Livres;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Livres>
 *
 * @method Livres|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livres|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livres[]    findAll()
 * @method Livres[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livres::class);
    }

    public function add(Livres $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Livres $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    
//    /**
//     * @return Livres[] Returns an array of Livres objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Livres
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    public function searchBooks($query)
    {
            $qb = $this->createQueryBuilder('search');
            $qb->where('search.titre LIKE :query')
                ->orWhere('search.auteur LIKE :query')
                ->setParameter('query', '%'.$query.'%');
            $query= $qb->getQuery()->getResult();
            return $query;
    }

    public function findByGenres($value)
    {
        return $this->createQueryBuilder('l')
        ->andWhere('l.genres = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getResult()
        ;
    }

    public function findByTitre($value)
    {
        return $this->createQueryBuilder('l')
        ->andWhere('l.titre = :val')
        ->setParameter('val', "%".$value."%")
        ->getQuery()
        ->getResult()
        ;
    }

    public function findByPervers($value)
    {
        return $this->createQueryBuilder('l')
        ->andWhere('l.pervers = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getResult()
        ;
    }

   
}
