<?php

namespace App\DataFixtures;
use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $movie = new Movie();
         $movie->setTitle("The Dark Knight");
         $movie->setReleaseYear(2008);
         $movie->setDescription("This is a nice description");
         $movie->setImage("https://static.posters.cz/image/750/poster/the-batman-downpour-i123456.jpg");
         $movie->addActor($this->getReference('actor_1'));
         $movie->addActor($this->getReference('actor_2'));
         $manager->persist($movie);
         $movie1 = new Movie();
         $movie1->setTitle("Avengers");
         $movie1->setReleaseYear(2019);
         $movie1->setDescription("This is a description of Anvengers");
         $movie1->setImage("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/");
         $movie1->addActor($this->getReference('actor_3'));
         $movie1->addActor($this->getReference('actor_4'));
         $manager->persist($movie1);
         $manager->flush();
    }
}
