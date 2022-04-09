<?php

namespace App\Repository;

use App\Entity\UserFacebook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserFacebook|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserFacebook|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserFacebook[]    findAll()
 * @method UserFacebook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserFacebookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserFacebook::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(UserFacebook $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(UserFacebook $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
}
