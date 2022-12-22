<?php

namespace App\Controller\Admin;


use App\Entity\User;
use App\Entity\Livres;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Valkyrie');
            
            
    }

    public function configureUserMenu(UserInterface $user): UserMenu{
        return parent::configureUserMenu($user)
        ->setName($user->getPrenom())
        ->setAvatarUrl($user->getUserName())
        ->addMenuItems([
            MenuItem::linkToRoute('Mon profile', 'fa fa-id-card', '...', ['...' => '...']),
            MenuItem::linkToRoute('Parametres', 'fa fa-user-cog', '...', ['...' => '...']),
           
        ]);
    }

    public function configureMenuItems(): iterable
    {
        //yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home'); 
        
        yield MenuItem::linkToCrud('User', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Livres', 'fas fa-book', Livres::class);
             
        
    }
    
}
