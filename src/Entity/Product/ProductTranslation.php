<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\ProductTranslation as BaseProductTranslation;

/**
 * @ORM\Entity()
 * @Table(name="sylius_product_translation")
 */
class ProductTranslation extends BaseProductTranslation
{
    public const PRODUCT_COLOR_BLUE = 'sylius.product.color.blue';
    public const PRODUCT_COLOR_GREEN = 'sylius.product.color.green';
    public const PRODUCT_COLOR_RED = 'sylius.product.color.red';

    /**
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     * @var string
     */
    protected $color;

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

}
