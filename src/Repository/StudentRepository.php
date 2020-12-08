<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Student|null find($id, $lockMode = null, $lockVersion = null)
 * @method Student|null findOneBy(array $criteria, array $orderBy = null)
 * @method Student[]    findAll()
 * @method Student[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Student::class);
    }

    public function findByName(string $name) : array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT c.*, p.name as teacher FROM student c
            LEFT JOIN teacher p ON p.id = c.teacher_id 
            WHERE c.name LIKE :name
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['name' => '%'.$name.'%']);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }
}
