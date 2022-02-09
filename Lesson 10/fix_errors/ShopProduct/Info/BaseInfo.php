<?php
declare(strict_types=1);


abstract class BaseInfo
{
    /** @var ShopProduct */
    protected ShopProduct $shopProduct;

    /**
     * @param ShopProduct $shopProduct
     */
    public function __construct(ShopProduct $shopProduct)
    {
        $this->shopProduct = $shopProduct;
    }

    /**
     * @return string
     */
    abstract protected function getAdditionalInfo(): string;

    /**
     * @return string
     */
    public function __toString(): string
    {
        $preparedInfo = "{$this->shopProduct->getProductType()}: ";
        $preparedInfo .= "Назва: {$this->shopProduct->getTitle()}";
        $preparedInfo .= ", виробник: {$this->shopProduct->getProducer()}";
        $preparedInfo .= ", ціна: {$this->shopProduct->getPrice()}";
        $preparedInfo .= ", {$this->getAdditionalInfo()}";

        return $preparedInfo;
    }
}
