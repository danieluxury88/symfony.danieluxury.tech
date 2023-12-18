<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function home() : Response
    {
        // return new Response(
        //     '<html><body>Welcome</body></html>'
        // );
        return $this->render('home.html.twig',[

        ]);
    }
}