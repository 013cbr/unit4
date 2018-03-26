<?php
namespace Unit4\Entity;

class OrderEntity
{
    private $accountManager = '';
    private $accountManagerId = '';
    private $messages = [];
    private $applyOrderSurcharge = false;
    private $approved = true;
    private $approvedBy = '';
    private $autoUnmatchToPurchase = false;
    private $blocked = false;
    private $canChange = true;
    private $chargeVatType = 0;
    private $collectiveInvoiceSystemId = '';
    private $contactPerson = '';
    private $contactPersonId = '';
    private $costCentreId = '';
    private $costUnitId = '';
    private $creditSqueezePerc = 0.0;
    private $currencyId = '';
    private $customerCountryId = '';
    private $customerId = '';
    private $deliveryAddress = '';
    private $deliveryConditionId = '';
    private $discountPercentage = 0.0;
    private $invoiceAddress = '';
    private $mainOrderId = '';
    private $mandateId = '';
    private $matchedToPurchase = false;
    private $orderDate = '';
    private $orderId = '';
    private $orderLines = [];
    private $orderState = 0;
    private $orderSurcharge = 0.0;
    private $orderSurchargeVatCodeId = 0;
    private $orderType = 0;
    private $paymentConditionId = '';
    private $processedBy = '';
    private $processedById = '';
    private $projectId = '';
    private $reference = '';
    private $totalCreditSqueezeAmount = 0.0;
    private $totalDiscountAmount = 0.0;
    private $totalGoodsAmount = 0.0;
    private $totalOrderAmount = 0.0;
    private $totalVatAmount = 0.0;
    private $vatScenarioId = 0;

    /**
     * @return string
     */
    public function getAccountManager()
    {
        return $this->accountManager;
    }

    /**
     * @param string $accountManager
     * @return OrderEntity
     */
    public function setAccountManager($accountManager)
    {
        $this->accountManager = $accountManager;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountManagerId()
    {
        return $this->accountManagerId;
    }

    /**
     * @param string $accountManagerId
     * @return OrderEntity
     */
    public function setAccountManagerId($accountManagerId)
    {
        $this->accountManagerId = $accountManagerId;
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
     * @return OrderEntity
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * @return bool
     */
    public function isApplyOrderSurcharge()
    {
        return $this->applyOrderSurcharge;
    }

    /**
     * @param bool $applyOrderSurcharge
     * @return OrderEntity
     */
    public function setApplyOrderSurcharge($applyOrderSurcharge)
    {
        $this->applyOrderSurcharge = $applyOrderSurcharge;
        return $this;
    }

    /**
     * @return bool
     */
    public function isApproved()
    {
        return $this->approved;
    }

    /**
     * @param bool $approved
     * @return OrderEntity
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
        return $this;
    }

    /**
     * @return string
     */
    public function getApprovedBy()
    {
        return $this->approvedBy;
    }

    /**
     * @param string $approvedBy
     * @return OrderEntity
     */
    public function setApprovedBy($approvedBy)
    {
        $this->approvedBy = $approvedBy;
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
     * @return OrderEntity
     */
    public function setAutoUnmatchToPurchase($autoUnmatchToPurchase)
    {
        $this->autoUnmatchToPurchase = $autoUnmatchToPurchase;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBlocked()
    {
        return $this->blocked;
    }

    /**
     * @param bool $blocked
     * @return OrderEntity
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;
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
     * @return OrderEntity
     */
    public function setCanChange($canChange)
    {
        $this->canChange = $canChange;
        return $this;
    }

    /**
     * @return int
     */
    public function getChargeVatType()
    {
        return $this->chargeVatType;
    }

    /**
     * @param int $chargeVatType
     * @return OrderEntity
     */
    public function setChargeVatType($chargeVatType)
    {
        $this->chargeVatType = $chargeVatType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectiveInvoiceSystemId()
    {
        return $this->collectiveInvoiceSystemId;
    }

    /**
     * @param string $collectiveInvoiceSystemId
     * @return OrderEntity
     */
    public function setCollectiveInvoiceSystemId($collectiveInvoiceSystemId)
    {
        $this->collectiveInvoiceSystemId = $collectiveInvoiceSystemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     * @return OrderEntity
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPersonId()
    {
        return $this->contactPersonId;
    }

    /**
     * @param string $contactPersonId
     * @return OrderEntity
     */
    public function setContactPersonId($contactPersonId)
    {
        $this->contactPersonId = $contactPersonId;
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
     * @return OrderEntity
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
     * @return OrderEntity
     */
    public function setCostUnitId($costUnitId)
    {
        $this->costUnitId = $costUnitId;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditSqueezePerc()
    {
        return $this->creditSqueezePerc;
    }

    /**
     * @param float $creditSqueezePerc
     * @return OrderEntity
     */
    public function setCreditSqueezePerc($creditSqueezePerc)
    {
        $this->creditSqueezePerc = $creditSqueezePerc;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * @param string $currencyId
     * @return OrderEntity
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCountryId()
    {
        return $this->customerCountryId;
    }

    /**
     * @param string $customerCountryId
     * @return OrderEntity
     */
    public function setCustomerCountryId($customerCountryId)
    {
        $this->customerCountryId = $customerCountryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     * @return OrderEntity
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param string $deliveryAddress
     * @return OrderEntity
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryConditionId()
    {
        return $this->deliveryConditionId;
    }

    /**
     * @param string $deliveryConditionId
     * @return OrderEntity
     */
    public function setDeliveryConditionId($deliveryConditionId)
    {
        $this->deliveryConditionId = $deliveryConditionId;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * @param float $discountPercentage
     * @return OrderEntity
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceAddress()
    {
        return $this->invoiceAddress;
    }

    /**
     * @param string $invoiceAddress
     * @return OrderEntity
     */
    public function setInvoiceAddress($invoiceAddress)
    {
        $this->invoiceAddress = $invoiceAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMainOrderId()
    {
        return $this->mainOrderId;
    }

    /**
     * @param string $mainOrderId
     * @return OrderEntity
     */
    public function setMainOrderId($mainOrderId)
    {
        $this->mainOrderId = $mainOrderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMandateId()
    {
        return $this->mandateId;
    }

    /**
     * @param string $mandateId
     * @return OrderEntity
     */
    public function setMandateId($mandateId)
    {
        $this->mandateId = $mandateId;
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
     * @return OrderEntity
     */
    public function setMatchedToPurchase($matchedToPurchase)
    {
        $this->matchedToPurchase = $matchedToPurchase;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @param string $orderDate
     * @return OrderEntity
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return OrderEntity
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return array
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param OrderLineEntity $orderLine
     * @return $this
     */
    public function addOrderLine(OrderLineEntity $orderLine)
    {
        $this->orderLines[] = $orderLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @param int $orderState
     * @return OrderEntity
     */
    public function setOrderState($orderState)
    {
        $this->orderState = $orderState;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderSurcharge()
    {
        return $this->orderSurcharge;
    }

    /**
     * @param float $orderSurcharge
     * @return OrderEntity
     */
    public function setOrderSurcharge($orderSurcharge)
    {
        $this->orderSurcharge = $orderSurcharge;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderSurchargeVatCodeId()
    {
        return $this->orderSurchargeVatCodeId;
    }

    /**
     * @param int $orderSurchargeVatCodeId
     * @return OrderEntity
     */
    public function setOrderSurchargeVatCodeId($orderSurchargeVatCodeId)
    {
        $this->orderSurchargeVatCodeId = $orderSurchargeVatCodeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * @param int $orderType
     * @return OrderEntity
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentConditionId()
    {
        return $this->paymentConditionId;
    }

    /**
     * @param string $paymentConditionId
     * @return OrderEntity
     */
    public function setPaymentConditionId($paymentConditionId)
    {
        $this->paymentConditionId = $paymentConditionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessedBy()
    {
        return $this->processedBy;
    }

    /**
     * @param string $processedBy
     * @return OrderEntity
     */
    public function setProcessedBy($processedBy)
    {
        $this->processedBy = $processedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessedById()
    {
        return $this->processedById;
    }

    /**
     * @param string $processedById
     * @return OrderEntity
     */
    public function setProcessedById($processedById)
    {
        $this->processedById = $processedById;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param string $projectId
     * @return OrderEntity
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return OrderEntity
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalCreditSqueezeAmount()
    {
        return $this->totalCreditSqueezeAmount;
    }

    /**
     * @param float $totalCreditSqueezeAmount
     * @return OrderEntity
     */
    public function setTotalCreditSqueezeAmount($totalCreditSqueezeAmount)
    {
        $this->totalCreditSqueezeAmount = $totalCreditSqueezeAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalDiscountAmount()
    {
        return $this->totalDiscountAmount;
    }

    /**
     * @param float $totalDiscountAmount
     * @return OrderEntity
     */
    public function setTotalDiscountAmount($totalDiscountAmount)
    {
        $this->totalDiscountAmount = $totalDiscountAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalGoodsAmount()
    {
        return $this->totalGoodsAmount;
    }

    /**
     * @param float $totalGoodsAmount
     * @return OrderEntity
     */
    public function setTotalGoodsAmount($totalGoodsAmount)
    {
        $this->totalGoodsAmount = $totalGoodsAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalOrderAmount()
    {
        return $this->totalOrderAmount;
    }

    /**
     * @param float $totalOrderAmount
     * @return OrderEntity
     */
    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalVatAmount()
    {
        return $this->totalVatAmount;
    }

    /**
     * @param float $totalVatAmount
     * @return OrderEntity
     */
    public function setTotalVatAmount($totalVatAmount)
    {
        $this->totalVatAmount = $totalVatAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getVatScenarioId()
    {
        return $this->vatScenarioId;
    }

    /**
     * @param int $vatScenarioId
     * @return OrderEntity
     */
    public function setVatScenarioId($vatScenarioId)
    {
        $this->vatScenarioId = $vatScenarioId;
        return $this;
    }


}