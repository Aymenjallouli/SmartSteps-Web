<?php

namespace App\Repository;

use App\Entity\Unite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class UniteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Unite::class);
    }

    public function findBySearchAndSort(?string $search, ?string $sort): array
    {
        $queryBuilder = $this->createQueryBuilder('u');

        // Recherche par titre
        if ($search) {
            $queryBuilder->andWhere('u.Titre LIKE :search')
                         ->setParameter('search', '%'.$search.'%');
        }

        // Tri par numéro d'unité
        if ($sort === 'NumUnite_asc') {
            $queryBuilder->orderBy('u.NumUnite', 'ASC');
        } elseif ($sort === 'num_unite_desc') {
            $queryBuilder->orderBy('u.NumUnite', 'DESC');
        }

        return $queryBuilder->getQuery()->getResult();
    }
}
