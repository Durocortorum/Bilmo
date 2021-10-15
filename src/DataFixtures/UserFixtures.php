<?php

namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class UserFixtures extends Fixture
{
	public function load(ObjectManager $manager)
    {
		$faker = \Faker\Factory::create('fr_FR');

		for($i = 1 ; $i <= 15 ; $i++) {
			$user = new User();

			// $user = $manager->getRepository(User::class)->findOneBy(["lastname" => "Société test"]);

			$user->setLastname("text")
				 ->setFirstname("text")
				 ->setEmail("text")
				 ->setAdress("text")
				 ->setCity("text")
				 ->setPhone("text")
				 ->setCustomer($user);
				 ;

			$manager->persist($user);
		}

        $manager->flush();
    }
}