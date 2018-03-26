<?php
namespace Unit4\Entity;

class ProductEntity
{
    private $accountId = '';
    private $additionalUnits = 0.0;
    private $messages = [];
    private $canChange = true;
    private $components = null;
    private $constellationNotition = '';
    private $coverageAccountId = '';
    private $currentStock = 0.0;
    private $customProperties = [];
    private $dateCreated = '';
    private $description = '';
    private $discountAccountId = '';
    private $eanCode = '';
    private $intrastatCode = 0;
    private $lastUpdate = '';
    private $margin = 0.0;
    private $maxStock = 0.0;
    private $minStock = 0.0;
    private $preferredProductSupplier = null;       // XXX: this is another entity ?
    private $pricePer = 1.0;
    private $priceVatExcl = 0.0;
    private $priceVatIncl = 0.0;
    private $printOnInvoice = false;
    private $printOnQuote = false;
    private $printOnShippingOrder = false;
    private $printOnWarehouseOrder = false;
    private $productDescriptions = null;
    private $productDiscountGroupId = '';
    private $productGroupId = '';
    private $productId = '';
    private $productState = 0;
    private $productSuppliers = null;
    private $productType = 0;
    private $projectEntryType = 0;
    private $projectSurchargePerc = 0.0;
    private $publishOnWeb = true;
    private $purchaseOrderCount = 0;
    private $quantityScale = 0;
    private $shortName = '';
    private $stocks = null;
    private $stockTransactionCount = 0;
    private $stockTransferPrice = 0.0;
    private $unit = 'stuk';
    private $vatCodeId = 0;
    private $weight = 0.0;

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return ProductEntity
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdditionalUnits()
    {
        return $this->additionalUnits;
    }

    /**
     * @param float $additionalUnits
     * @return ProductEntity
     */
    public function setAdditionalUnits($additionalUnits)
    {
        $this->additionalUnits = $additionalUnits;
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
     * @param $message
     * @return $this
     */
    public function addMessage($message)
    {
        $this->messages[] = $message;
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
     * @return ProductEntity
     */
    public function setCanChange($canChange)
    {
        $this->canChange = $canChange;
        return $this;
    }

    /**
     * @return null
     */
    public function getComponents()
    {
        return $this->components;
    }

    public function addComponent($component)
    {
        $this->components[] = $component;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomProperties()
    {
        return $this->customProperties;
    }

    public function addCustomProperty($customProperty)
    {
        $this->customProperties[] = $customProperty;
        return $this;
    }

    /**
     * @return string
     */
    public function getConstellationNotition()
    {
        return $this->constellationNotition;
    }

    /**
     * @param string $constellationNotition
     * @return ProductEntity
     */
    public function setConstellationNotition($constellationNotition)
    {
        $this->constellationNotition = $constellationNotition;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoverageAccountId()
    {
        return $this->coverageAccountId;
    }

    /**
     * @param string $coverageAccountId
     * @return ProductEntity
     */
    public function setCoverageAccountId($coverageAccountId)
    {
        $this->coverageAccountId = $coverageAccountId;
        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentStock()
    {
        return $this->currentStock;
    }

    /**
     * @param float $currentStock
     * @return ProductEntity
     */
    public function setCurrentStock($currentStock)
    {
        $this->currentStock = $currentStock;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param string $dateCreated
     * @return ProductEntity
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
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
     * @return ProductEntity
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return ProductEntity
     */
    public function setDiscountAccountId($discountAccountId)
    {
        $this->discountAccountId = $discountAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEanCode()
    {
        return $this->eanCode;
    }

    /**
     * @param string $eanCode
     * @return ProductEntity
     */
    public function setEanCode($eanCode)
    {
        $this->eanCode = $eanCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntrastatCode()
    {
        return $this->intrastatCode;
    }

    /**
     * @param int $intrastatCode
     * @return ProductEntity
     */
    public function setIntrastatCode($intrastatCode)
    {
        $this->intrastatCode = $intrastatCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param string $lastUpdate
     * @return ProductEntity
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     * @param float $margin
     * @return ProductEntity
     */
    public function setMargin($margin)
    {
        $this->margin = $margin;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxStock()
    {
        return $this->maxStock;
    }

    /**
     * @param float $maxStock
     * @return ProductEntity
     */
    public function setMaxStock($maxStock)
    {
        $this->maxStock = $maxStock;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinStock()
    {
        return $this->minStock;
    }

    /**
     * @param float $minStock
     * @return ProductEntity
     */
    public function setMinStock($minStock)
    {
        $this->minStock = $minStock;
        return $this;
    }

    /**
     * @return null
     */
    public function getPreferredProductSupplier()
    {
        return $this->preferredProductSupplier;
    }

    /**
     * @param null $preferredProductSupplier
     * @return ProductEntity
     */
    public function setPreferredProductSupplier($preferredProductSupplier)
    {
        $this->preferredProductSupplier = $preferredProductSupplier;
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
     * @return ProductEntity
     */
    public function setPricePer($pricePer)
    {
        $this->pricePer = $pricePer;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceVatExcl()
    {
        return $this->priceVatExcl;
    }

    /**
     * @param float $priceVatExcl
     * @return ProductEntity
     */
    public function setPriceVatExcl($priceVatExcl)
    {
        $this->priceVatExcl = $priceVatExcl;
        return $this;
    }

    /**
     * @return float
     */
    public function getPriceVatIncl()
    {
        return $this->priceVatIncl;
    }

    /**
     * @param float $priceVatIncl
     * @return ProductEntity
     */
    public function setPriceVatIncl($priceVatIncl)
    {
        $this->priceVatIncl = $priceVatIncl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrintOnInvoice()
    {
        return $this->printOnInvoice;
    }

    /**
     * @param bool $printOnInvoice
     * @return ProductEntity
     */
    public function setPrintOnInvoice($printOnInvoice)
    {
        $this->printOnInvoice = $printOnInvoice;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrintOnQuote()
    {
        return $this->printOnQuote;
    }

    /**
     * @param bool $printOnQuote
     * @return ProductEntity
     */
    public function setPrintOnQuote($printOnQuote)
    {
        $this->printOnQuote = $printOnQuote;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrintOnShippingOrder()
    {
        return $this->printOnShippingOrder;
    }

    /**
     * @param bool $printOnShippingOrder
     * @return ProductEntity
     */
    public function setPrintOnShippingOrder($printOnShippingOrder)
    {
        $this->printOnShippingOrder = $printOnShippingOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrintOnWarehouseOrder()
    {
        return $this->printOnWarehouseOrder;
    }

    /**
     * @param bool $printOnWarehouseOrder
     * @return ProductEntity
     */
    public function setPrintOnWarehouseOrder($printOnWarehouseOrder)
    {
        $this->printOnWarehouseOrder = $printOnWarehouseOrder;
        return $this;
    }

    /**
     * @return null
     */
    public function getProductDescriptions()
    {
        return $this->productDescriptions;
    }

    /**
     * @param null $productDescriptions
     * @return ProductEntity
     */
    public function setProductDescriptions($productDescriptions)
    {
        $this->productDescriptions = $productDescriptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductDiscountGroupId()
    {
        return $this->productDiscountGroupId;
    }

    /**
     * @param string $productDiscountGroupId
     * @return ProductEntity
     */
    public function setProductDiscountGroupId($productDiscountGroupId)
    {
        $this->productDiscountGroupId = $productDiscountGroupId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductGroupId()
    {
        return $this->productGroupId;
    }

    /**
     * @param string $productGroupId
     * @return ProductEntity
     */
    public function setProductGroupId($productGroupId)
    {
        $this->productGroupId = $productGroupId;
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
     * @return ProductEntity
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductState()
    {
        return $this->productState;
    }

    /**
     * @param int $productState
     * @return ProductEntity
     */
    public function setProductState($productState)
    {
        $this->productState = $productState;
        return $this;
    }

    /**
     * @return null
     */
    public function getProductSuppliers()
    {
        return $this->productSuppliers;
    }

    /**
     * @param null $productSuppliers
     * @return ProductEntity
     */
    public function setProductSuppliers($productSuppliers)
    {
        $this->productSuppliers = $productSuppliers;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param int $productType
     * @return ProductEntity
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectEntryType()
    {
        return $this->projectEntryType;
    }

    /**
     * @param int $projectEntryType
     * @return ProductEntity
     */
    public function setProjectEntryType($projectEntryType)
    {
        $this->projectEntryType = $projectEntryType;
        return $this;
    }

    /**
     * @return float
     */
    public function getProjectSurchargePerc()
    {
        return $this->projectSurchargePerc;
    }

    /**
     * @param float $projectSurchargePerc
     * @return ProductEntity
     */
    public function setProjectSurchargePerc($projectSurchargePerc)
    {
        $this->projectSurchargePerc = $projectSurchargePerc;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPublishOnWeb()
    {
        return $this->publishOnWeb;
    }

    /**
     * @param bool $publishOnWeb
     * @return ProductEntity
     */
    public function setPublishOnWeb($publishOnWeb)
    {
        $this->publishOnWeb = $publishOnWeb;
        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderCount()
    {
        return $this->purchaseOrderCount;
    }

    /**
     * @param int $purchaseOrderCount
     * @return ProductEntity
     */
    public function setPurchaseOrderCount($purchaseOrderCount)
    {
        $this->purchaseOrderCount = $purchaseOrderCount;
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
     * @return ProductEntity
     */
    public function setQuantityScale($quantityScale)
    {
        $this->quantityScale = $quantityScale;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     * @return ProductEntity
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * @return null
     */
    public function getStocks()
    {
        return $this->stocks;
    }

    /**
     * @param null $stocks
     * @return ProductEntity
     */
    public function setStocks($stocks)
    {
        $this->stocks = $stocks;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockTransactionCount()
    {
        return $this->stockTransactionCount;
    }

    /**
     * @param int $stockTransactionCount
     * @return ProductEntity
     */
    public function setStockTransactionCount($stockTransactionCount)
    {
        $this->stockTransactionCount = $stockTransactionCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getStockTransferPrice()
    {
        return $this->stockTransferPrice;
    }

    /**
     * @param float $stockTransferPrice
     * @return ProductEntity
     */
    public function setStockTransferPrice($stockTransferPrice)
    {
        $this->stockTransferPrice = $stockTransferPrice;
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
     * @return ProductEntity
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
     * @return ProductEntity
     */
    public function setVatCodeId($vatCodeId)
    {
        $this->vatCodeId = $vatCodeId;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return ProductEntity
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
}