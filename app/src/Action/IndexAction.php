<?php

declare(strict_types=1);

namespace App\Action;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexAction
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function __invoke(): Response
    {
        return new JsonResponse([
            'containerName' => $_ENV['CONTAINER_NAME'],
        ]);
    }
}