<?php

namespace App\Factory;

use App\Entity\Order;
use App\Entity\livres;
use App\Entity\OrderItem;

/**
 * Class OrderFactory
 * @package App\Factory
 */
class OrderFactory
{
    /**
     * Creates an order.
     *
     * @return Order
     */
    public function create(): Order
    {
        $order = new Order();
        $order
            ->setStatus(Order::STATUS_CART)
            ->setCreeAt(new \DateTime())
            ->setModifieAt(new \DateTime());

        return $order;
    }

    /**
     * Creates an livre for a livres.
     *
     * @param livres $livres
     *
     * @return OrderItem
     */
    public function createLivre(livres $livres): OrderItem
    {
        $livre = new OrderItem();
        $livre->setLivres($livres);
        $livre->setQuantite(1);

        return $livre;
    }

    /**
     * Removes an OrderItem associated with a livres from the database.
     *
     * @param livres $livres
     *
     * @return void
     */
    public function removeLivre(livres $livres): void
    {
        $entityManager = $this->getDoctrine()->getManager();
        $orderItem = $entityManager->getRepository(OrderItem::class)->findOneBy(['livres' => $livres]);
        dd($orderItem);
        if ($orderItem) {
            $entityManager->removeItems($orderItem);
            $entityManager->flush();
        }
    }
}