<?php
/**
 * Created by PhpStorm.
 * User: moi
 * Date: 11/12/2016
 * Time: 17:20
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    public function findAllPublishedOrderBySize()
    {
        /**
         * @return Genus[]
         */
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->orderBy('genus.speciesCount', 'DESC')
            ->getQuery()
            ->execute();
    }


}