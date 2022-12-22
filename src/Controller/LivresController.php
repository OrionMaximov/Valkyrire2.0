<?php

namespace App\Controller;

use App\Entity\Livres;
use App\Form\AddToCartType;
use App\Manager\CartManager;
use App\Repository\LivresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class LivresController
 * @package App\Controller
 */
class LivresController extends AbstractController
{
    /**
     * @Route("/livres/{id}", name="livres.detail")
     */
    public function detail(Livres $livres, Request $request, CartManager $cartManager)
    {
        $form = $this->createForm(AddToCartType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();
            $item->setLivres($livres);

            $cart = $cartManager->getCurrentCart();
            $cart
                ->addItem($item)
                ->setModifieAt(new \DateTime());

            $cartManager->save($cart);

            return $this->redirectToRoute('livres.detail', ['id' => $livres->getId()]);
        }

        return $this->render('livres/detail.html.twig', [
            'livres' => $livres,
            'form' => $form->createView()
        ]);
    }
}
