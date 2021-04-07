<?php

namespace App\Services;

use App\Entity\Url;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class Helpers
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getUser(int $userId)
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['id' => $userId]);
        if ( is_null($user)) {
            return 0;
        }
        return $user;
    }

    public function getUrl(int $urlId)
    {
        $url = $this->entityManager->getRepository(Url::class)->findOneBy(['id' => $urlId]);
        if ( is_null($url)) {
            return 0;
        }
        return $url;
    }
}