<?php

namespace App\Repository;

use App\Entity\Cour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cour>
 *
 * @method Cour|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cour|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cour[]    findAll()
 * @method Cour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cour::class);
    }

    /**
     * Recherche et tri des cours.
     *
     * @param string|null $search Le terme de recherche
     * @param string|null $sort Le champ de tri (optionnel)
     * @return Cour[] Retourne un tableau d'objets Cour correspondant aux critères de recherche et de tri
     */
    public function findBySearchAndSort(?string $search, ?string $sort): array
    {
        $queryBuilder = $this->createQueryBuilder('c');
    
        // Recherche par nom de matière
        if ($search) {
            $queryBuilder->andWhere('c.Matiere LIKE :search')
                         ->setParameter('search', '%'.$search.'%');
        }
    
        // Tri
        switch ($sort) {
            case 'date_fin_asc':
                $queryBuilder->orderBy('c.Date_Fin', 'ASC');
                break;
            case 'date_fin_desc':
                $queryBuilder->orderBy('c.Date_Fin', 'DESC');
                break;
            case 'nom_asc':
                $queryBuilder->orderBy('c.Matiere', 'ASC');
                break;
            case 'nom_desc':
                $queryBuilder->orderBy('c.Matiere', 'DESC');
                break;
            default:
                // Pas de tri par défaut
                break;
        }
    
        return $queryBuilder->getQuery()->getResult();
    }
    
}
