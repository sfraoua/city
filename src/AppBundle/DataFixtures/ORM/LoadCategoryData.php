<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Category;
use AppBundle\Entity\SubCategory;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setNameFr("Massage");
        $category->setNameEn("Massage");
        $subCategory = new SubCategory();
        $subCategory->setNameFr('Massage Chinois');
        $subCategory->setNameEn('Chinese Massage');
        $subCategory->setCategory($category);
        $category->addSubCategory($subCategory);
        
        $manager->persist($category);
        
        $subCategory = new SubCategory();
        $subCategory->setNameFr('Massage Thaï');
        $subCategory->setNameEn('Thaï Massage');
        $subCategory->setCategory($category);
        $category->addSubCategory($subCategory);
        $manager->persist($category);
        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
