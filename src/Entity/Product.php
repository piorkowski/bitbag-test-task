<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Table;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @MappedSuperclass
 * @Table(name="sylius_product")
 */
class Product extends BaseProduct
{

    /** @return string|null */
    public function getColor(): ?string
    {
        return $this->getTranslation()->getColor();
    }

    /**
     * @param string $color
     *
     * @return Product
     */
    public function setProductColor(string $color): self
    {
        $this->getTranslation()->setColor($color);

        return $this;
    }

    /** {@inheritdoc} */
    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
