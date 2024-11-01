<?php

namespace App\Form\Extension;

use App\EventSubscriber\AddCustomJsFormSubscriber;
use Sylius\Bundle\OrderBundle\Form\Type\CartItemType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;

class CartItemTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantity', IntegerType::class, [
                'attr' => [
                    'min' => 10,
                    'step' => 10,
                    'value' => 10,
                    'data-alert-quantity-js' => 'true'
                ],
                'label' => 'sylius.ui.quantity',
            ])
        ;
    }

    public static function getExtendedTypes(): iterable
    {
        return [CartItemType::class];
    }
}
