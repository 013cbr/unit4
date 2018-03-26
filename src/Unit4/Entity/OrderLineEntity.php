<?php
namespace Unit4\Entity;

class OrderLineEntity
{
    private $accountId = 0;
    private $messages = [];
    private $autoCalculatePrice = true;
    private $autoUnmatchToPurchase = false;
    private $canChange = true;
    private $costCentreId = '';
    private $costUnitId = '';
    private $deliveryDate = '';
    private $description = '';
    private $discount = 0.0;
    private $discountAccountId = '';
    private $matchedToPurchase = false;
    private $orderLineAmount = 0.0;
    private $orderLineId = 0;
    private $orderLineType = 0;
    private $pickListText = false;
    private $price = 0.0;
    private $pricePer = 1.0;
    private $productId = '';
    private $quantityBackorder = 0.0;
    private $quantityDelivered = 0.0;
    private $quantityOrdered = 0.0;
    private $quantityScale = 0;
    private $unit = 'stuk';
    private $vatCodeId = 0;
    private $warehouseId = '';

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return OrderLineEntity
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param array $messages
     * @return OrderLineEntity
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoCalculatePrice()
    {
        return $this->autoCalculatePrice;
    }

    /**
     * @param bool $autoCalculatePrice
     * @return OrderLineEntity
     */
    public function setAutoCalculatePrice($autoCalculatePrice)
    {
        $this->autoCalculatePrice = $autoCalculatePrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoUnmatchToPurchase()
    {
        return $this->autoUnmatchToPurchase;
    }

    /**
     * @param bool $autoUnmatchToPurchase
     * @return OrderLineEntity
     */
    public function setAutoUnmatchToPurchase($autoUnmatchToPurchase)
    {
        $this->autoUnmatchToPurchase = $autoUnmatchToPurchase;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCanChange()
    {
        return $this->canChange;
    }

    /**
     * @param bool $canChange
     * @return OrderLineEntity
     */
    public function setCanChange($canChange)
    {
        $this->canChange = $canChange;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostCentreId()
    {
        return $this->costCentreId;
    }

    /**
     * @param string $costCentreId
     * @return OrderLineEntity
     */
    public function setCostCentreId($costCentreId)
    {
        $this->costCentreId = $costCentreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostUnitId()
    {
        return $this->costUnitId;
    }

    /**
     * @param string $costUnitId
     * @return OrderLineEntity
     */
    public function setCostUnitId($costUnitId)
    {
        $this->costUnitId = $costUnitId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param string $deliveryDate
     * @return OrderLineEntity
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return OrderLineEntity
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return OrderLineEntity
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountAccountId()
    {
        return $this->discountAccountId;
    }

    /**
     * @param string $discountAccountId
     * @return OrderLineEntity
     */
    public function setDiscountAccountId($discountAccountId)
    {
        $this->discountAccountId = $discountAccountId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMatchedToPurchase()
    {
        return $this->matchedToPurchase;
    }

    /**
     * @param bool $matchedToPurchase
     * @return OrderLineEntity
     */
    public function setMatchedToPurchase($matchedToPurchase)
    {
        $this->matchedToPurchase = $matchedToPurchase;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderLineAmount()
    {
        return $this->orderLineAmount;
    }

    /**
     * @param float $orderLineAmount
     * @return OrderLineEntity
     */
    public function setOrderLineAmount($orderLineAmount)
    {
        $this->orderLineAmount = $orderLineAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderLineId()
    {
        return $this->orderLineId;
    }

    /**
     * @param int $orderLineId
     * @return OrderLineEntity
     */
    public function setOrderLineId($orderLineId)
    {
        $this->orderLineId = $orderLineId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderLineType()
    {
        return $this->orderLineType;
    }

    /**
     * @param int $orderLineType
     * @return OrderLineEntity
     */
    public function setOrderLineType($orderLineType)
    {
        $this->orderLineType = $orderLineType;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPickListText()
    {
        return $this->pickListText;
    }

    /**
     * @param bool $pickListText
     * @return OrderLineEntity
     */
    public function setPickListText($pickListText)
    {
        $this->pickListText = $pickListText;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return OrderLineEntity
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getPricePer()
    {
        return $this->pricePer;
    }

    /**
     * @param float $pricePer
     * @return OrderLineEntity
     */
    public function setPricePer($pricePer)
    {
        $this->pricePer = $pricePer;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     * @return OrderLineEntity
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityBackorder()
    {
        return $this->quantityBackorder;
    }

    /**
     * @param float $quantityBackorder
     * @return OrderLineEntity
     */
    public function setQuantityBackorder($quantityBackorder)
    {
        $this->quantityBackorder = $quantityBackorder;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityDelivered()
    {
        return $this->quantityDelivered;
    }

    /**
     * @param float $quantityDelivered
     * @return OrderLineEntity
     */
    public function setQuantityDelivered($quantityDelivered)
    {
        $this->quantityDelivered = $quantityDelivered;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityOrdered()
    {
        return $this->quantityOrdered;
    }

    /**
     * @param float $quantityOrdered
     * @return OrderLineEntity
     */
    public function setQuantityOrdered($quantityOrdered)
    {
        $this->quantityOrdered = $quantityOrdered;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityScale()
    {
        return $this->quantityScale;
    }

    /**
     * @param int $quantityScale
     * @return OrderLineEntity
     */
    public function setQuantityScale($quantityScale)
    {
        $this->quantityScale = $quantityScale;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return OrderLineEntity
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return int
     */
    public function getVatCodeId()
    {
        return $this->vatCodeId;
    }

    /**
     * @param int $vatCodeId
     * @return OrderLineEntity
     */
    public function setVatCodeId($vatCodeId)
    {
        $this->vatCodeId = $vatCodeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->warehouseId;
    }

    /**
     * @param string $warehouseId
     * @return OrderLineEntity
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }
}