<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\LivresRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Security;

class GenreController extends AbstractController
{
    /**
     * @Route("/genre", name="app_genre", methods={"GET"})
     */
    public function index(LivresRepository $livresRepository,Security $security): Response
    {   

        $user=$security->getUser();
        
        if($user){
            if($user->getRoles()){
                if(('ROLE_ADMIN' || 'ROLE_PERVERS')){
                      $livres=$livresRepository->findByGenres($_GET['genres']); 
                 
                }else{
                    $result=$livresRepository->findByGenres($_GET['genres']);
                                        $livres=[];
                                        foreach ($result as $value){
                                            if(!$value->isPervers()){
                                            array_push($livres,$value);
                                            } 
                                        }    
                }    
            }else{
                $result=$livresRepository->findByGenres($_GET['genres']);
                $livres=[];
                foreach ($result as $value){
                    if(!$value->isPervers()){
                        array_push($livres,$value);
                    }   
                }        
            }       
        }else{
            $result=$livresRepository->findByGenres($_GET['genres']);
                $livres=[];
                foreach ($result as $value){
                    if(!$value->isPervers()){
                        array_push($livres,$value);
                    }   
                }  
        }

        return $this->render('genre/index.html.twig', [
            'livres' => $livres ,
        ]);
    }
}
