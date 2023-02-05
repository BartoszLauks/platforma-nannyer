<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/info', name: 'app_info')]
    public function info() : Response
    {
        return $this->render('home/info.html.twig');
    }

    #[Route('/kontakt', name: 'app_kontakt')]
    public function kontakt() : Response
    {
        return $this->render('home/kontakt.html.twig');
    }

    #[Route('/cennik', name: 'app_cennik')]
    public function cennik() : Response
    {
        return $this->render('home/cennikhtml.twig');
    }
}
