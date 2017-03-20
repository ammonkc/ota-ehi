<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Telephone StructType
 * @subpackage Structs
 */
class Telephone extends AbstractStructBase
{
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
     * @var
     */
    public $PhoneLocationType;
    /**
     * The PhoneTechType
     * @var
     */
    public $PhoneTechType;
    /**
     * The PhoneUseType
     * @var
     */
    public $PhoneUseType;
    /**
     * The CountryAccessCode
     * @var
     */
    public $CountryAccessCode;
    /**
     * The AreaCityCode
     * @var
     */
    public $AreaCityCode;
    /**
     * The PhoneNumber
     * @var
     */
    public $PhoneNumber;
    /**
     * The Extension
     * @var
     */
    public $Extension;
    /**
     * The PIN
     * @var
     */
    public $PIN;
    /**
     * The Remark
     * @var
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
     * @param  $transferAction
     * @param  $parentCompanyRef
     * @param string $shareSynchInd
     * @param string $shareMarketInd
     * @param  $phoneLocationType
     * @param  $phoneTechType
     * @param  $phoneUseType
     * @param  $countryAccessCode
     * @param  $areaCityCode
     * @param  $phoneNumber
     * @param  $extension
     * @param  $pIN
     * @param  $remark
     * @param bool $formattedInd
     */
    public function __construct( $transferAction = null,  $parentCompanyRef = null, $shareSynchInd = null, $shareMarketInd = null,  $phoneLocationType = null,  $phoneTechType = null,  $phoneUseType = null,  $countryAccessCode = null,  $areaCityCode = null,  $phoneNumber = null,  $extension = null,  $pIN = null,  $remark = null, $formattedInd = null)
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
     * @return |null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param  $transferAction
     * @return \Ammonkc\Otaehi\StructType\Telephone
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
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setParentCompanyRef( $parentCompanyRef = null)
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
     * @return |null
     */
    public function getPhoneLocationType()
    {
        return $this->PhoneLocationType;
    }
    /**
     * Set PhoneLocationType value
     * @param  $phoneLocationType
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneLocationType( $phoneLocationType = null)
    {
        $this->PhoneLocationType = $phoneLocationType;
        return $this;
    }
    /**
     * Get PhoneTechType value
     * @return |null
     */
    public function getPhoneTechType()
    {
        return $this->PhoneTechType;
    }
    /**
     * Set PhoneTechType value
     * @param  $phoneTechType
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneTechType( $phoneTechType = null)
    {
        $this->PhoneTechType = $phoneTechType;
        return $this;
    }
    /**
     * Get PhoneUseType value
     * @return |null
     */
    public function getPhoneUseType()
    {
        return $this->PhoneUseType;
    }
    /**
     * Set PhoneUseType value
     * @param  $phoneUseType
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneUseType( $phoneUseType = null)
    {
        $this->PhoneUseType = $phoneUseType;
        return $this;
    }
    /**
     * Get CountryAccessCode value
     * @return |null
     */
    public function getCountryAccessCode()
    {
        return $this->CountryAccessCode;
    }
    /**
     * Set CountryAccessCode value
     * @param  $countryAccessCode
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setCountryAccessCode( $countryAccessCode = null)
    {
        $this->CountryAccessCode = $countryAccessCode;
        return $this;
    }
    /**
     * Get AreaCityCode value
     * @return |null
     */
    public function getAreaCityCode()
    {
        return $this->AreaCityCode;
    }
    /**
     * Set AreaCityCode value
     * @param  $areaCityCode
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setAreaCityCode( $areaCityCode = null)
    {
        $this->AreaCityCode = $areaCityCode;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return |null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param  $phoneNumber
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPhoneNumber( $phoneNumber = null)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get Extension value
     * @return |null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param  $extension
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setExtension( $extension = null)
    {
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Get PIN value
     * @return |null
     */
    public function getPIN()
    {
        return $this->PIN;
    }
    /**
     * Set PIN value
     * @param  $pIN
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setPIN( $pIN = null)
    {
        $this->PIN = $pIN;
        return $this;
    }
    /**
     * Get Remark value
     * @return |null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param  $remark
     * @return \Ammonkc\Otaehi\StructType\Telephone
     */
    public function setRemark( $remark = null)
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
