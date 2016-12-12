<?php
/**
 * Created by PhpStorm.
 * User: moi
 * Date: 11/12/2016
 * Time: 17:20
 */

namespace AppBundle\Repository;

use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;


class GenusRepository extends EntityRepository
{
    public function findAllPublishedOrderByRecentlyActive()
    {
        /**
         * @return Genus[]
         */
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->leftJoin('genus.notes', 'genus_note')
            ->orderBy('genus_note.createdAt', 'DESC')
            ->getQuery()
            ->execute();
    }


}