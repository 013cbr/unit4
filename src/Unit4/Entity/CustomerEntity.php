<?php
namespace Unit4\Entity;

class CustomerEntity
{
    private $accountManagerId = '';
    private $addresses = null;
    private $messages = [];
    private $applyOrderSurcharge = true;
    private $businessNumber = '';
    private $canChange = true;
    private $chargeVatTypeId = 0;
    private $city = '';
    private $cocCity = '';
    private $cocDate = '';
    private $cocRegistration = '';
    private $collectiveInvoiceSystemId = '';
    private $combineInvoicesForElectronicBanking = false;
    private $countryId = '';
    private $creditLimit = 0.0;
    private $creditSqueezeId = '';
    private $currencyId = '';
    private $customerGroupId = 0;
    private $customerId = '';
    private $customerStateId = '';
    private $database = '';
    private $dateChanged = '';
    private $dateCreated = '';
    private $deliveryConditionId = '';
    private $discountPercentage = 0.0;
    private $email = '';
    private $fax = '';
    private $fullAddress = '';
    private $fullDeliveryAddress = '';
    private $googleMapsDirectionsUrl = '';
    private $googleMapsUrl = '';
    private $governmentDigitalId = '';
    private $hasOutstandingBalance = false;
    private $homepage = '';
    private $includeVatOnOrderByDefault = false;
    private $intrastatGoodsCodeId = 0;
    private $intrastatGoodsDistributionId = 0;
    private $intrastatStatSystemId = 0;
    private $intrastatTrafficRegionId = 0;
    private $intrastatTransactionTypeId = '';
    private $intrastatTransportTypeId = 0;
    private $invoiceOnBehalfOfMembers = false;
    private $isDunForPayment = true;
    private $isInFactoring = true;
    private $isPaymentRefRequired = false;
    private $isPurchaseOrganization = false;            // todo: check default value
    private $languageId = '';
    private $mobilePhone = '';
    private $name = '';
    private $organizationId = 0;
    private $paymentConditionId = '';
    private $person = '';
    private $pricelistId = '';
    private $printPurchaseDetails = false;
    private $purchaseOrganizationId = '';
    private $purchaseOrganizationMemberId = '';
    private $revenueAccountId = '';
    private $shortName = '';
    private $street1 = '';
    private $street2 = '';
    private $supplierId = '';
    private $telephone = '';
    private $usesUBLInvoice = true;
    private $vatNumber = '';
    private $vatScenarioId = 0;
    private $vatVerificationDate = '';
    private $zipCode = '';
    private $customProperties = [];

    /**
     * @return string
     */
    public function getAccountManagerId()
    {
        return $this->accountManagerId;
    }

    /**
     * @param string $accountManagerId
     * @return CustomerEntity
     */
    public function setAccountManagerId($accountManagerId)
    {
        $this->accountManagerId = $accountManagerId;
        return $this;
    }

    /**
     * @return null
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param null $addresses
     * @return CustomerEntity
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
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
     * @return CustomerEntity
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
     * @return CustomerEntity
     */
    public function setApplyOrderSurcharge($applyOrderSurcharge)
    {
        $this->applyOrderSurcharge = $applyOrderSurcharge;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessNumber()
    {
        return $this->businessNumber;
    }

    /**
     * @param string $businessNumber
     * @return CustomerEntity
     */
    public function setBusinessNumber($businessNumber)
    {
        $this->businessNumber = $businessNumber;
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
     * @return CustomerEntity
     */
    public function setCanChange($canChange)
    {
        $this->canChange = $canChange;
        return $this;
    }

    /**
     * @return int
     */
    public function getChargeVatTypeId()
    {
        return $this->chargeVatTypeId;
    }

    /**
     * @param int $chargeVatTypeId
     * @return CustomerEntity
     */
    public function setChargeVatTypeId($chargeVatTypeId)
    {
        $this->chargeVatTypeId = $chargeVatTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return CustomerEntity
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCocCity()
    {
        return $this->cocCity;
    }

    /**
     * @param string $cocCity
     * @return CustomerEntity
     */
    public function setCocCity($cocCity)
    {
        $this->cocCity = $cocCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getCocDate()
    {
        return $this->cocDate;
    }

    /**
     * @param string $cocDate
     * @return CustomerEntity
     */
    public function setCocDate($cocDate)
    {
        $this->cocDate = $cocDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCocRegistration()
    {
        return $this->cocRegistration;
    }

    /**
     * @param string $cocRegistration
     * @return CustomerEntity
     */
    public function setCocRegistration($cocRegistration)
    {
        $this->cocRegistration = $cocRegistration;
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
     * @return CustomerEntity
     */
    public function setCollectiveInvoiceSystemId($collectiveInvoiceSystemId)
    {
        $this->collectiveInvoiceSystemId = $collectiveInvoiceSystemId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCombineInvoicesForElectronicBanking()
    {
        return $this->combineInvoicesForElectronicBanking;
    }

    /**
     * @param bool $combineInvoicesForElectronicBanking
     * @return CustomerEntity
     */
    public function setCombineInvoicesForElectronicBanking($combineInvoicesForElectronicBanking)
    {
        $this->combineInvoicesForElectronicBanking = $combineInvoicesForElectronicBanking;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param string $countryId
     * @return CustomerEntity
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * @param float $creditLimit
     * @return CustomerEntity
     */
    public function setCreditLimit($creditLimit)
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreditSqueezeId()
    {
        return $this->creditSqueezeId;
    }

    /**
     * @param string $creditSqueezeId
     * @return CustomerEntity
     */
    public function setCreditSqueezeId($creditSqueezeId)
    {
        $this->creditSqueezeId = $creditSqueezeId;
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
     * @return CustomerEntity
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * @param int $customerGroupId
     * @return CustomerEntity
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;
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
     * @return CustomerEntity
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerStateId()
    {
        return $this->customerStateId;
    }

    /**
     * @param string $customerStateId
     * @return CustomerEntity
     */
    public function setCustomerStateId($customerStateId)
    {
        $this->customerStateId = $customerStateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @param string $database
     * @return CustomerEntity
     */
    public function setDatabase($database)
    {
        $this->database = $database;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * @param string $dateChanged
     * @return CustomerEntity
     */
    public function setDateChanged($dateChanged)
    {
        $this->dateChanged = $dateChanged;
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
     * @return CustomerEntity
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
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
     * @return CustomerEntity
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
     * @return CustomerEntity
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return CustomerEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return CustomerEntity
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }

    /**
     * @param string $fullAddress
     * @return CustomerEntity
     */
    public function setFullAddress($fullAddress)
    {
        $this->fullAddress = $fullAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullDeliveryAddress()
    {
        return $this->fullDeliveryAddress;
    }

    /**
     * @param string $fullDeliveryAddress
     * @return CustomerEntity
     */
    public function setFullDeliveryAddress($fullDeliveryAddress)
    {
        $this->fullDeliveryAddress = $fullDeliveryAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleMapsDirectionsUrl()
    {
        return $this->googleMapsDirectionsUrl;
    }

    /**
     * @param string $googleMapsDirectionsUrl
     * @return CustomerEntity
     */
    public function setGoogleMapsDirectionsUrl($googleMapsDirectionsUrl)
    {
        $this->googleMapsDirectionsUrl = $googleMapsDirectionsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleMapsUrl()
    {
        return $this->googleMapsUrl;
    }

    /**
     * @param string $googleMapsUrl
     * @return CustomerEntity
     */
    public function setGoogleMapsUrl($googleMapsUrl)
    {
        $this->googleMapsUrl = $googleMapsUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getGovernmentDigitalId()
    {
        return $this->governmentDigitalId;
    }

    /**
     * @param string $governmentDigitalId
     * @return CustomerEntity
     */
    public function setGovernmentDigitalId($governmentDigitalId)
    {
        $this->governmentDigitalId = $governmentDigitalId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasOutstandingBalance()
    {
        return $this->hasOutstandingBalance;
    }

    /**
     * @param bool $hasOutstandingBalance
     * @return CustomerEntity
     */
    public function setHasOutstandingBalance($hasOutstandingBalance)
    {
        $this->hasOutstandingBalance = $hasOutstandingBalance;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     * @return CustomerEntity
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeVatOnOrderByDefault()
    {
        return $this->includeVatOnOrderByDefault;
    }

    /**
     * @param bool $includeVatOnOrderByDefault
     * @return CustomerEntity
     */
    public function setIncludeVatOnOrderByDefault($includeVatOnOrderByDefault)
    {
        $this->includeVatOnOrderByDefault = $includeVatOnOrderByDefault;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntrastatGoodsCodeId()
    {
        return $this->intrastatGoodsCodeId;
    }

    /**
     * @param int $intrastatGoodsCodeId
     * @return CustomerEntity
     */
    public function setIntrastatGoodsCodeId($intrastatGoodsCodeId)
    {
        $this->intrastatGoodsCodeId = $intrastatGoodsCodeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntrastatGoodsDistributionId()
    {
        return $this->intrastatGoodsDistributionId;
    }

    /**
     * @param int $intrastatGoodsDistributionId
     * @return CustomerEntity
     */
    public function setIntrastatGoodsDistributionId($intrastatGoodsDistributionId)
    {
        $this->intrastatGoodsDistributionId = $intrastatGoodsDistributionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntrastatStatSystemId()
    {
        return $this->intrastatStatSystemId;
    }

    /**
     * @param int $intrastatStatSystemId
     * @return CustomerEntity
     */
    public function setIntrastatStatSystemId($intrastatStatSystemId)
    {
        $this->intrastatStatSystemId = $intrastatStatSystemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntrastatTrafficRegionId()
    {
        return $this->intrastatTrafficRegionId;
    }

    /**
     * @param int $intrastatTrafficRegionId
     * @return CustomerEntity
     */
    public function setIntrastatTrafficRegionId($intrastatTrafficRegionId)
    {
        $this->intrastatTrafficRegionId = $intrastatTrafficRegionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIntrastatTransactionTypeId()
    {
        return $this->intrastatTransactionTypeId;
    }

    /**
     * @param string $intrastatTransactionTypeId
     * @return CustomerEntity
     */
    public function setIntrastatTransactionTypeId($intrastatTransactionTypeId)
    {
        $this->intrastatTransactionTypeId = $intrastatTransactionTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntrastatTransportTypeId()
    {
        return $this->intrastatTransportTypeId;
    }

    /**
     * @param int $intrastatTransportTypeId
     * @return CustomerEntity
     */
    public function setIntrastatTransportTypeId($intrastatTransportTypeId)
    {
        $this->intrastatTransportTypeId = $intrastatTransportTypeId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInvoiceOnBehalfOfMembers()
    {
        return $this->invoiceOnBehalfOfMembers;
    }

    /**
     * @param bool $invoiceOnBehalfOfMembers
     * @return CustomerEntity
     */
    public function setInvoiceOnBehalfOfMembers($invoiceOnBehalfOfMembers)
    {
        $this->invoiceOnBehalfOfMembers = $invoiceOnBehalfOfMembers;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDunForPayment()
    {
        return $this->isDunForPayment;
    }

    /**
     * @param bool $isDunForPayment
     * @return CustomerEntity
     */
    public function setIsDunForPayment($isDunForPayment)
    {
        $this->isDunForPayment = $isDunForPayment;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInFactoring()
    {
        return $this->isInFactoring;
    }

    /**
     * @param bool $isInFactoring
     * @return CustomerEntity
     */
    public function setIsInFactoring($isInFactoring)
    {
        $this->isInFactoring = $isInFactoring;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaymentRefRequired()
    {
        return $this->isPaymentRefRequired;
    }

    /**
     * @param bool $isPaymentRefRequired
     * @return CustomerEntity
     */
    public function setIsPaymentRefRequired($isPaymentRefRequired)
    {
        $this->isPaymentRefRequired = $isPaymentRefRequired;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPurchaseOrganization()
    {
        return $this->isPurchaseOrganization;
    }

    /**
     * @param bool $isPurchaseOrganization
     * @return CustomerEntity
     */
    public function setIsPurchaseOrganization($isPurchaseOrganization)
    {
        $this->isPurchaseOrganization = $isPurchaseOrganization;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * @param string $languageId
     * @return CustomerEntity
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return CustomerEntity
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CustomerEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @param int $organizationId
     * @return CustomerEntity
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
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
     * @return CustomerEntity
     */
    public function setPaymentConditionId($paymentConditionId)
    {
        $this->paymentConditionId = $paymentConditionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param string $person
     * @return CustomerEntity
     */
    public function setPerson($person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * @return string
     */
    public function getPricelistId()
    {
        return $this->pricelistId;
    }

    /**
     * @param string $pricelistId
     * @return CustomerEntity
     */
    public function setPricelistId($pricelistId)
    {
        $this->pricelistId = $pricelistId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrintPurchaseDetails()
    {
        return $this->printPurchaseDetails;
    }

    /**
     * @param bool $printPurchaseDetails
     * @return CustomerEntity
     */
    public function setPrintPurchaseDetails($printPurchaseDetails)
    {
        $this->printPurchaseDetails = $printPurchaseDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrganizationId()
    {
        return $this->purchaseOrganizationId;
    }

    /**
     * @param string $purchaseOrganizationId
     * @return CustomerEntity
     */
    public function setPurchaseOrganizationId($purchaseOrganizationId)
    {
        $this->purchaseOrganizationId = $purchaseOrganizationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseOrganizationMemberId()
    {
        return $this->purchaseOrganizationMemberId;
    }

    /**
     * @param string $purchaseOrganizationMemberId
     * @return CustomerEntity
     */
    public function setPurchaseOrganizationMemberId($purchaseOrganizationMemberId)
    {
        $this->purchaseOrganizationMemberId = $purchaseOrganizationMemberId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRevenueAccountId()
    {
        return $this->revenueAccountId;
    }

    /**
     * @param string $revenueAccountId
     * @return CustomerEntity
     */
    public function setRevenueAccountId($revenueAccountId)
    {
        $this->revenueAccountId = $revenueAccountId;
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
     * @return CustomerEntity
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     * @return CustomerEntity
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param string $street2
     * @return CustomerEntity
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param string $supplierId
     * @return CustomerEntity
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return CustomerEntity
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUsesUBLInvoice()
    {
        return $this->usesUBLInvoice;
    }

    /**
     * @param bool $usesUBLInvoice
     * @return CustomerEntity
     */
    public function setUsesUBLInvoice($usesUBLInvoice)
    {
        $this->usesUBLInvoice = $usesUBLInvoice;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     * @return CustomerEntity
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
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
     * @return CustomerEntity
     */
    public function setVatScenarioId($vatScenarioId)
    {
        $this->vatScenarioId = $vatScenarioId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatVerificationDate()
    {
        return $this->vatVerificationDate;
    }

    /**
     * @param string $vatVerificationDate
     * @return CustomerEntity
     */
    public function setVatVerificationDate($vatVerificationDate)
    {
        $this->vatVerificationDate = $vatVerificationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return CustomerEntity
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomProperties()
    {
        return $this->customProperties;
    }

    /**
     * @param array $customProperties
     * @return CustomerEntity
     */
    public function setCustomProperties($customProperties)
    {
        $this->customProperties = $customProperties;
        return $this;
    }


}