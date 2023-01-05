<?php

namespace App\Form;

use App\Entity\Livres;
use App\Entity\Order;
use App\Entity\OrderItem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CartItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')
            ->add('livres',EntityType::class,['class'=>Livres::class,
            'choice_label' => 'titre',
            'multiple' => true,
            'expanded' => true,
            'required' => true,
            'mapped'=>false])
            //->add('livres', CollectionType::class, [
             //   'entry_type' => CartItemType::class
            //])
            ->add('orderRef',EntityType::class,['class'=>Order::class,
            'choice_label' => 'status',
            'multiple' => true,
            'expanded' => true,
            'required' => true,
            'mapped'=>false
            ])
            ->add('remove', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => OrderItem::class,
        ]);
    }
}
