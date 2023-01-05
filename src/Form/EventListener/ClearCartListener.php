<?php

namespace App\Form\EventListener;

use App\Entity\Order;
use App\Entity\OrderItem;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ClearCartListener implements EventSubscriberInterface
{
    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents(): array
    {
        return [FormEvents::POST_SUBMIT => 'postSubmit'];
    }

    /**
     * Removes all livres from the cart when the clear button is clicked.
     *
     * @param FormEvent $event
     */
    public function postSubmit(FormEvent $event): void
    {
        $form = $event->getForm();
        $cart = $form->getData();
        
        if (!$cart instanceof Order) {
            return;
        }

        // Is the clear button clicked?
        if (!$form->get('clear')->isClicked()) {
            
            unset($cart);
            return;
        }

        // Clears the cart
        
       
       
    }
}