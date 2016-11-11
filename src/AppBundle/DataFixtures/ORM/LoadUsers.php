<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUsers implements FixtureInterface {
  public function load(ObjectManager $manager) {
    $user1 = new User();
    $user1->setName('John');
    $user1->setBio('He\'s a cool guy');
    $user1->setEmail('john@mava.com');
    $manager->persist($user1);

    $user2 = new User();
    $user2->setName('Jack');
    $user2->setBio('He\'s a cool guy too');
    $user2->setEmail('jack@mava.com');
    $manager->persist($user2);

    $manager->flush();
  }
}
