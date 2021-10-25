<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Faker\Factory;
use App\Entity\Product;
use Bezhanov\Faker\Provider\Commerce;
use Bluemmb\Faker\PicsumPhotosProvider;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        $faker->addProvider(new \Bluemmb\Faker\PicsumPhotosProvider($faker));


        for ($i=0; $i < 5 ; $i++) 
        { 
            $categorie = new Category();
            $categorie->setName($faker->department());
            switch ($i) 
            {
                case '0':
                    $categorie->setColor("success");
                    break;
                
                case '1':
                    $categorie->setColor("danger");
                    break;

                case '2':
                    $categorie->setColor("warning");
                    break;
                
                case '3':
                    $categorie->setColor("info");
                    break;

                case '4':
                    $categorie->setColor("dark");
                    break;   
            }
            $manager->persist($categorie);

            for ($p=1; $p <= 10; $p++)
            { 
            $product = new Product();
            

            $product->setName($faker->productName())
                ->setShortDescription($faker->sentence(20))
                ->setPrice($faker->randomFloat(2, 10, 300))
                ->setLongDescription($faker->paragraph(50))
                ->setQuantity($faker->randomNumber(1,50))
                ->setVisible($faker->boolean(50))
                ->setCreatedAt($faker->dateTimeThisYear())
                ->setMainPicture($faker->imageUrl(300,300,true))
                ->setCategory($categorie);

            $manager->persist($product);
            }
        }

        $manager->flush();
    }
}
