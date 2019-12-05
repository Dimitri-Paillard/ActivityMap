<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setLabel("Monument");
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setLabel("Musée");
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setLabel("Plage");
        $manager->persist($category3);


        $manager->flush();
    }
}
