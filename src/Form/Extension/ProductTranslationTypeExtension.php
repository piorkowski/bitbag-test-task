<?php

namespace App\Form\Extension;

use App\Entity\Product\ProductTranslation;
use Sylius\Bundle\ProductBundle\Form\Type\ProductTranslationType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTranslationTypeExtension extends AbstractTypeExtension
{
    /** {@inheritdoc} */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('color', ChoiceType::class, [
            'label' => 'sylius.product.color',
            'required' => false,
            'choices' => [
                'sylius.product.color.blue' => ProductTranslation::PRODUCT_COLOR_BLUE,
                'sylius.product.color.green' => ProductTranslation::PRODUCT_COLOR_GREEN,
                'sylius.product.color.red' => ProductTranslation::PRODUCT_COLOR_RED,
            ],
        ]);
    }

    /** {@inheritdoc} */
    public static function getExtendedTypes(): iterable
    {
        return [ProductTranslationType::class];
    }
}
