<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\CartType;
use App\Entity\OrderItem;
use App\Form\CartItemType;
use App\Manager\CartManager;
use App\Storage\CartSessionStorage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



/**
 * Class CartController
 * @package App\Controller
 */
class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(CartManager $cartManager, Request $request): Response
    {
        $cart = $cartManager->getCurrentCart();
        $form = $this->createForm(CartType::class, $cart);
        $form->handleRequest($request);
 
        if ($form->isSubmitted() && $form->isValid()) {
           
            $cart->setModifieAt(new \DateTime());
            $cartManager->save($cart);

            return $this->redirectToRoute('cart');
        }

        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/cartPayement", name="payement")
     */
    public function payement():Response
    {
        return $this->render('cart/payement.html.twig',[

        ]);
    }

}
