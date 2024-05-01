<?php

namespace App\Repository;

use App\Entity\Commentaire;
use App\Entity\Forum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository< Forum>
 *
 * @method  Forum|null find($id, $lockMode = null, $lockVersion = null)
 * @method  Forum|null findOneBy(array $criteria, array $orderBy = null)
 * @method  Forum[]    findAll()
 * @method  Forum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry,  Forum::class);
    }

//    /**
//     * @return Chapitre[] Returns an array of Chapitre objects
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
    public function findTop3MostCommentedForums(): array
    {
        return $this->createQueryBuilder('f')
            ->select('f.id', 'f.titre', 'COUNT(c.id) AS commentCount')
            ->leftJoin('App\Entity\Commentaire', 'c', 'WITH', 'c.idForum = f.id')
            ->groupBy('f.id')
            ->orderBy('commentCount', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }
    /**
     * Recherche les commentaires par description.
     *
     * @param string $description La description à rechercher.
     * @return Commentaire[] Retourne un tableau de commentaires correspondants à la recherche.
     */
    public function searchByDescription(string $description): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.description LIKE :description')
            ->setParameter('description', '%' . $description . '%')
            ->getQuery()
            ->getResult();
    }
//    public function findOneBySomeField($value): ?Chapitre
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
