<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{
     private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }


    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('first@example.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'firstpwd'));
        $manager->persist($user);

        $otheruser = new User();
        $otheruser->setEmail('second@example.com');
        $otheruser->setPassword($this->passwordEncoder->encodePassword(
            $otheruser,
            'secondpwd'));
        $manager->persist($otheruser);

        $manager->flush();
    }

}
