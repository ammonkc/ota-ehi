<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The CompanyName
     * @var mixed
     */
    public $CompanyName;
    /**
     * The AddresseeName
     * @var mixed
     */
    public $AddresseeName;
    /**
     * The ValidationStatus
     * @var string
     */
    public $ValidationStatus;
    /**
     * The TransferAction
     * @var
     */
    public $TransferAction;
    /**
     * The ParentCompanyRef
     * @var
     */
    public $ParentCompanyRef;
    /**
     * The SameCountryInd
     * @var bool
     */
    public $SameCountryInd;
    /**
     * The AddressSearchScope
     * @var string
     */
    public $AddressSearchScope;
    /**
     * The SiteID
     * @var
     */
    public $SiteID;
    /**
     * The SiteName
     * @var
     */
    public $SiteName;
    /**
     * Constructor method for Address
     * @uses Address::setCompanyName()
     * @uses Address::setAddresseeName()
     * @uses Address::setValidationStatus()
     * @uses Address::setTransferAction()
     * @uses Address::setParentCompanyRef()
     * @uses Address::setSameCountryInd()
     * @uses Address::setAddressSearchScope()
     * @uses Address::setSiteID()
     * @uses Address::setSiteName()
     * @param mixed $companyName
     * @param mixed $addresseeName
     * @param string $validationStatus
     * @param  $transferAction
     * @param  $parentCompanyRef
     * @param bool $sameCountryInd
     * @param string $addressSearchScope
     * @param  $siteID
     * @param  $siteName
     */
    public function __construct($companyName = null, $addresseeName = null, $validationStatus = null,  $transferAction = null,  $parentCompanyRef = null, $sameCountryInd = null, $addressSearchScope = null,  $siteID = null,  $siteName = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setAddresseeName($addresseeName)
            ->setValidationStatus($validationStatus)
            ->setTransferAction($transferAction)
            ->setParentCompanyRef($parentCompanyRef)
            ->setSameCountryInd($sameCountryInd)
            ->setAddressSearchScope($addressSearchScope)
            ->setSiteID($siteID)
            ->setSiteName($siteName);
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get AddresseeName value
     * @return mixed|null
     */
    public function getAddresseeName()
    {
        return $this->AddresseeName;
    }
    /**
     * Set AddresseeName value
     * @param mixed $addresseeName
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setAddresseeName($addresseeName = null)
    {
        $this->AddresseeName = $addresseeName;
        return $this;
    }
    /**
     * Get ValidationStatus value
     * @return string|null
     */
    public function getValidationStatus()
    {
        return $this->ValidationStatus;
    }
    /**
     * Set ValidationStatus value
     * @param string $validationStatus
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setValidationStatus($validationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($validationStatus) && !is_string($validationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validationStatus)), __LINE__);
        }
        $this->ValidationStatus = $validationStatus;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return |null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param  $transferAction
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setTransferAction( $transferAction = null)
    {
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Get ParentCompanyRef value
     * @return |null
     */
    public function getParentCompanyRef()
    {
        return $this->ParentCompanyRef;
    }
    /**
     * Set ParentCompanyRef value
     * @param  $parentCompanyRef
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setParentCompanyRef( $parentCompanyRef = null)
    {
        $this->ParentCompanyRef = $parentCompanyRef;
        return $this;
    }
    /**
     * Get SameCountryInd value
     * @return bool|null
     */
    public function getSameCountryInd()
    {
        return $this->SameCountryInd;
    }
    /**
     * Set SameCountryInd value
     * @param bool $sameCountryInd
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setSameCountryInd($sameCountryInd = null)
    {
        $this->SameCountryInd = $sameCountryInd;
        return $this;
    }
    /**
     * Get AddressSearchScope value
     * @return string|null
     */
    public function getAddressSearchScope()
    {
        return $this->AddressSearchScope;
    }
    /**
     * Set AddressSearchScope value
     * @param string $addressSearchScope
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setAddressSearchScope($addressSearchScope = null)
    {
        // validation for constraint: string
        if (!is_null($addressSearchScope) && !is_string($addressSearchScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressSearchScope)), __LINE__);
        }
        $this->AddressSearchScope = $addressSearchScope;
        return $this;
    }
    /**
     * Get SiteID value
     * @return |null
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @param  $siteID
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setSiteID( $siteID = null)
    {
        $this->SiteID = $siteID;
        return $this;
    }
    /**
     * Get SiteName value
     * @return |null
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }
    /**
     * Set SiteName value
     * @param  $siteName
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public function setSiteName( $siteName = null)
    {
        $this->SiteName = $siteName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Address
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
