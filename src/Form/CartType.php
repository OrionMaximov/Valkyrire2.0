<?php

namespace App\Form;

use App\Entity\Order;
use DateTimeInterface;
use App\Storage\CartSessionStorage;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use App\Form\EventListener\ClearCartListener;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\EventListener\RemoveCartItemListener;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class CartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            //->add('creeAt',DateType::class)
            //->add('modifieAt',DateTimeInterface::class)
            ->add('items', CollectionType::class, [
                'entry_type' => CartItemType::class
            ])
            ->add('save', SubmitType::class)
            ->add('clear', SubmitType::class);

           
            $builder->addEventSubscriber(new RemoveCartItemListener());
            $builder->addEventSubscriber(new ClearCartListener());
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
