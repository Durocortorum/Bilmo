<?php

namespace App\DataFixtures;

use App\Entity\customer;
use App\Entity\product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $productNames = ['iproduct', 'Samsung', 'Nokia', 'Huawei'];

    private $firstNames = ['Kevin', 'John', 'Bob', 'Samuel', 'Cedric', 'Etienne', 'Jean', 'Marc', 'Romain', 'Tom'];

    private $city = ['Paris', 'New York', 'London', 'Berlin', 'Pekin', 'Milan', 'Barcelone', 'Bruxelle'];

    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        for ($i = 1; $i <= 10; $i++) {
            $product = new Product();
            $product->setName($this->productNames[random_int(0, 3)] . ' ' . random_int(5, 8));
            $product->setPrice(random_int(200, 1000 ));
            $product->setBrand($this->productNames[random_int(0, 3)] . ' ' . random_int(5, 8));
            $product->setDescription('Un Portable Splendide' . $i);

            $manager->persist($product);

            $customer = new Customer();
            $customer->setEmail('usermail' . $i . '@gmail.com');
            $customer->setPassword($this->encoder->hashPassword($customer, 'admin'));
            $customer->setName('name' . $i);
            

            $manager->persist($customer);

            $user = new User();
            $user->setAdress('Adress');
            $user->setFirstName($this->firstNames[random_int(0, 9)]);
            $user->setLastName($this->firstNames[random_int(0, 9)]);
            $user->setEmail('usermail' . $i . '@gmail.com');
            $user->setPhone('01 02 03 04 05');
            $user->setCity($this->city[random_int(0, 7)]);
            
            $user->setcustomer($customer);

            $manager->persist($user);
        }
        $manager->flush();
    }
}