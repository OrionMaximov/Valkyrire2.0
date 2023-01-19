<?php

namespace App\Controller;

use App\Entity\Livres;
use App\Repository\LivresRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    /**
     * @Route("/search", name="searchBooks",methods={"POST"})
     */
    public function searchBooks(Request $request,ManagerRegistry $doctrine)
    {
        $query = $request->request->get('query');
        $livre=$doctrine->getRepository(Livres::class);
        $books = $livre->searchBooks($query);
        $books = array_slice($books, 0, 15);
        return $this->json($books);
    }
}
