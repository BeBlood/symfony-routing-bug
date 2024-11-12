<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AController extends AbstractController
{
    /**
     * @throws \Exception
     */
    #[Route(path: '/a', name: 'a_method')]
    public function aMethodOne(): Response
    {
        throw new \Exception('A controller method');
    }
}
