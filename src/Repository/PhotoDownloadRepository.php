<?php

namespace App\Repository;

use App\Entity\PhotoDownload;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PhotoDownload|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoDownload|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoDownload[]    findAll()
 * @method PhotoDownload[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoDownloadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PhotoDownload::class);
    }

    // /**
    //  * @return PhotoDownload[] Returns an array of PhotoDownload objects
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
    public function findOneBySomeField($value): ?PhotoDownload
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
