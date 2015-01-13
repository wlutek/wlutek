<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\News;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadNewsData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 10; $i++) {
            $n = new News();
            $n->setTitle("News $i");
            $n->setSlug("news-$i");
            $n->setContent("Lorem ipsum dolor sit");
            $manager->persist($n);
        }
        $manager->flush();
    }
}