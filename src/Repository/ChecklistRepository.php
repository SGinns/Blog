<?php

namespace App\Repository;

use App\Entity\Checklist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Checklist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Checklist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Checklist[]    findAll()
 * @method Checklist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChecklistRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Checklist::class);
    }

    public function getAllItemsForChecklist(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT item FROM checklist
        ';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }
}
