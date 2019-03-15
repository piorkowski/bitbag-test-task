<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\ProductTranslation as BaseProductTranslation;

/**
 * @MappedSuperclass
 * @Table(name="sylius_product_translation")
 */
class ProductTranslation extends BaseProductTranslation
{
    public const PRODUCT_COLOR_BLUE = 'sylius.product.color.blue';
    public const PRODUCT_COLOR_GREEN = 'sylius.product.color.green';
    public const PRODUCT_COLOR_RED = 'sylius.product.color.red';

    /** @var string */
    protected $color;

    /** @return string|null */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return ProductTranslation
     */
    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

}
