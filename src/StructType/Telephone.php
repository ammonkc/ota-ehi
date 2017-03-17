<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Telephone StructType
 * @subpackage Structs
 */
class Telephone extends AbstractStructBase
{
    /**
     * The TransferAction
     * @var UNKNOWN
     */
    public $TransferAction;
    /**
     * The ParentCompanyRef
     * @var UNKNOWN
     */
    public $ParentCompanyRef;
    /**
     * The ShareSynchInd
     * @var string
     */
    public $ShareSynchInd;
    /**
     * The ShareMarketInd
     * @var string
     */
    public $ShareMarketInd;
    /**
     * The PhoneLocationType
     * @var UNKNOWN
     */
    public $PhoneLocationType;
    /**
     * The PhoneTechType
     * @var UNKNOWN
     */
    public $PhoneTechType;
    /**
     * The PhoneUseType
     * @var UNKNOWN
     */
    public $PhoneUseType;
    /**
     * The CountryAccessCode
     * @var UNKNOWN
     */
    public $CountryAccessCode;
    /**
     * The AreaCityCode
     * @var UNKNOWN
     */
    public $AreaCityCode;
    /**
     * The PhoneNumber
     * @var UNKNOWN
     */
    public $PhoneNumber;
    /**
     * The Extension
     * @var UNKNOWN
     */
    public $Extension;
    /**
     * The PIN
     * @var UNKNOWN
     */
    public $PIN;
    /**
     * The Remark
     * @var UNKNOWN
     */
    public $Remark;
    /**
     * The FormattedInd
     * @var bool
     */
    public $FormattedInd;
    /**
     * Constructor method for Telephone
     * @uses Telephone::setTransferAction()
     * @uses Telephone::setParentCompanyRef()
     * @uses Telephone::setShareSynchInd()
     * @uses Telephone::setShareMarketInd()
     * @uses Telephone::setPhoneLocationType()
     * @uses Telephone::setPhoneTechType()
     * @uses Telephone::setPhoneUseType()
     * @uses Telephone::setCountryAccessCode()
     * @uses Telephone::setAreaCityCode()
     * @uses Telephone::setPhoneNumber()
     * @uses Telephone::setExtension()
     * @uses Telephone::setPIN()
     * @uses Telephone::setRemark()
     * @uses Telephone::setFormattedInd()
     * @param UNKNOWN $transferAction
     * @param UNKNOWN $parentCompanyRef
     * @param string $shareSynchInd
     * @param string $shareMarketInd
     * @param UNKNOWN $phoneLocationType
     * @param UNKNOWN $phoneTechType
     * @param UNKNOWN $phoneUseType
     * @param UNKNOWN $countryAccessCode
     * @param UNKNOWN $areaCityCode
     * @param UNKNOWN $phoneNumber
     * @param UNKNOWN $extension
     * @param UNKNOWN $pIN
     * @param UNKNOWN $remark
     * @param bool $formattedInd
     */
    public function __construct(UNKNOWN $transferAction = null, UNKNOWN $parentCompanyRef = null, $shareSynchInd = null, $shareMarketInd = null, UNKNOWN $phoneLocationType = null, UNKNOWN $phoneTechType = null, UNKNOWN $phoneUseType = null, UNKNOWN $countryAccessCode = null, UNKNOWN $areaCityCode = null, UNKNOWN $phoneNumber = null, UNKNOWN $extension = null, UNKNOWN $pIN = null, UNKNOWN $remark = null, $formattedInd = null)
    {
        $this
            ->setTransferAction($transferAction)
            ->setParentCompanyRef($parentCompanyRef)
            ->setShareSynchInd($shareSynchInd)
            ->setShareMarketInd($shareMarketInd)
            ->setPhoneLocationType($phoneLocationType)
            ->setPhoneTechType($phoneTechType)
            ->setPhoneUseType($phoneUseType)
            ->setCountryAccessCode($countryAccessCode)
            ->setAreaCityCode($areaCityCode)
            ->setPhoneNumber($phoneNumber)
            ->setExtension($extension)
            ->setPIN($pIN)
            ->setRemark($remark)
            ->setFormattedInd($formattedInd);
    }
    /**
     * Get TransferAction value
     * @return UNKNOWN|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param UNKNOWN $transferAction
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setTransferAction(UNKNOWN $transferAction = null)
    {
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Get ParentCompanyRef value
     * @return UNKNOWN|null
     */
    public function getParentCompanyRef()
    {
        return $this->ParentCompanyRef;
    }
    /**
     * Set ParentCompanyRef value
     * @param UNKNOWN $parentCompanyRef
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setParentCompanyRef(UNKNOWN $parentCompanyRef = null)
    {
        $this->ParentCompanyRef = $parentCompanyRef;
        return $this;
    }
    /**
     * Get ShareSynchInd value
     * @return string|null
     */
    public function getShareSynchInd()
    {
        return $this->ShareSynchInd;
    }
    /**
     * Set ShareSynchInd value
     * @param string $shareSynchInd
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setShareSynchInd($shareSynchInd = null)
    {
        // validation for constraint: string
        if (!is_null($shareSynchInd) && !is_string($shareSynchInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shareSynchInd)), __LINE__);
        }
        $this->ShareSynchInd = $shareSynchInd;
        return $this;
    }
    /**
     * Get ShareMarketInd value
     * @return string|null
     */
    public function getShareMarketInd()
    {
        return $this->ShareMarketInd;
    }
    /**
     * Set ShareMarketInd value
     * @param string $shareMarketInd
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setShareMarketInd($shareMarketInd = null)
    {
        // validation for constraint: string
        if (!is_null($shareMarketInd) && !is_string($shareMarketInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shareMarketInd)), __LINE__);
        }
        $this->ShareMarketInd = $shareMarketInd;
        return $this;
    }
    /**
     * Get PhoneLocationType value
     * @return UNKNOWN|null
     */
    public function getPhoneLocationType()
    {
        return $this->PhoneLocationType;
    }
    /**
     * Set PhoneLocationType value
     * @param UNKNOWN $phoneLocationType
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneLocationType(UNKNOWN $phoneLocationType = null)
    {
        $this->PhoneLocationType = $phoneLocationType;
        return $this;
    }
    /**
     * Get PhoneTechType value
     * @return UNKNOWN|null
     */
    public function getPhoneTechType()
    {
        return $this->PhoneTechType;
    }
    /**
     * Set PhoneTechType value
     * @param UNKNOWN $phoneTechType
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneTechType(UNKNOWN $phoneTechType = null)
    {
        $this->PhoneTechType = $phoneTechType;
        return $this;
    }
    /**
     * Get PhoneUseType value
     * @return UNKNOWN|null
     */
    public function getPhoneUseType()
    {
        return $this->PhoneUseType;
    }
    /**
     * Set PhoneUseType value
     * @param UNKNOWN $phoneUseType
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneUseType(UNKNOWN $phoneUseType = null)
    {
        $this->PhoneUseType = $phoneUseType;
        return $this;
    }
    /**
     * Get CountryAccessCode value
     * @return UNKNOWN|null
     */
    public function getCountryAccessCode()
    {
        return $this->CountryAccessCode;
    }
    /**
     * Set CountryAccessCode value
     * @param UNKNOWN $countryAccessCode
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setCountryAccessCode(UNKNOWN $countryAccessCode = null)
    {
        $this->CountryAccessCode = $countryAccessCode;
        return $this;
    }
    /**
     * Get AreaCityCode value
     * @return UNKNOWN|null
     */
    public function getAreaCityCode()
    {
        return $this->AreaCityCode;
    }
    /**
     * Set AreaCityCode value
     * @param UNKNOWN $areaCityCode
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setAreaCityCode(UNKNOWN $areaCityCode = null)
    {
        $this->AreaCityCode = $areaCityCode;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return UNKNOWN|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param UNKNOWN $phoneNumber
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneNumber(UNKNOWN $phoneNumber = null)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get Extension value
     * @return UNKNOWN|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param UNKNOWN $extension
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setExtension(UNKNOWN $extension = null)
    {
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Get PIN value
     * @return UNKNOWN|null
     */
    public function getPIN()
    {
        return $this->PIN;
    }
    /**
     * Set PIN value
     * @param UNKNOWN $pIN
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPIN(UNKNOWN $pIN = null)
    {
        $this->PIN = $pIN;
        return $this;
    }
    /**
     * Get Remark value
     * @return UNKNOWN|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param UNKNOWN $remark
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setRemark(UNKNOWN $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get FormattedInd value
     * @return bool|null
     */
    public function getFormattedInd()
    {
        return $this->FormattedInd;
    }
    /**
     * Set FormattedInd value
     * @param bool $formattedInd
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setFormattedInd($formattedInd = null)
    {
        $this->FormattedInd = $formattedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Telephone
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
