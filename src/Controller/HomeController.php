<?php

namespace App\Controller;

use App\Repository\LivresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(LivresRepository $livresRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'livres' => $livresRepository->findAll(),
        ]);
    }

    /**
     * @Route("/cgu", name="cgu")
     */
    public function indexCgu(): Response
    {
        return $this->render('home/cgu.html.twig', [
            
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function indexAbout(): Response
    {
        return $this->render('home/about.html.twig', [
            
        ]);
    }
    
    /**
     * @Route("/ageVerif", name="ageVerif")
     */
    public function verif(): Response
    {
        return $this->render('home/ageverif.html.twig', [
            
        ]);
    }
}
