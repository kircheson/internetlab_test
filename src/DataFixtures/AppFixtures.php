<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $users = [
            ['email' => 'user1@example.com', 'password' => 'password1'],
            ['email' => 'user2@example.com', 'password' => 'password2'],
            ['email' => 'user3@example.com', 'password' => 'password3'],
            ['email' => 'user4@example.com', 'password' => 'password4'],
            ['email' => 'user5@example.com', 'password' => 'password5'],
        ];

        foreach ($users as $userData) {
            $user = new User();
            $user->setEmail($userData['email']);
            $user->setPassword(password_hash($userData['password'], PASSWORD_BCRYPT));

            $manager->persist($user);
        }

        $manager->flush();
    }
}