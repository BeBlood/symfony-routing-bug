<?php

declare(strict_types=1);

namespace App\Controller\B;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BController extends AbstractController
{
    /**
     * @throws \Exception
     */
    #[Route(path:  '/b', name: 'b_method', priority: 9999)]
    public function bMethodOne(): Response
    {
        throw new \Exception('B controller method');
    }
}
