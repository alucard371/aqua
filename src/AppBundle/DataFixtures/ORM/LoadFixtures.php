<?php
/**
 * Created by PhpStorm.
 * User: moi
 * Date: 11/12/2016
 * Time: 16:49
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $genus = new Genus();
        $genus->setName('Octopus'.rand(1, 100));
        $genus->setSubFamily('Octopodinae');
        $genus->setSpeciesCount(rand(100, 99999));

        $manager->persist($genus);
        $manager->flush();
    }
}