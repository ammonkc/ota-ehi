<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DonationType StructType
 * @subpackage Structs
 */
class DonationType extends AbstractStructBase
{
    /**
     * The FrontOfficeInfo
     * @var \Ammonkc\Otaehi\StructType\FrontOfficeInfo
     */
    public $FrontOfficeInfo;
    /**
     * The CreditCardInfo
     * @var \Ammonkc\Otaehi\StructType\CreditCardInfo
     */
    public $CreditCardInfo;
    /**
     * The DonorInfo
     * @var \Ammonkc\Otaehi\StructType\DonorInfo
     */
    public $DonorInfo;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The GDS_ID
     * @var string
     */
    public $GDS_ID;
    /**
     * The AskForReceiptInd
     * @var bool
     */
    public $AskForReceiptInd;
    /**
     * The CountryCode
     * @var
     */
    public $CountryCode;
    /**
     * The StateCode
     * @var
     */
    public $StateCode;
    /**
     * Constructor method for DonationType
     * @uses DonationType::setFrontOfficeInfo()
     * @uses DonationType::setCreditCardInfo()
     * @uses DonationType::setDonorInfo()
     * @uses DonationType::setTPA_Extensions()
     * @uses DonationType::setLanguage()
     * @uses DonationType::setGDS_ID()
     * @uses DonationType::setAskForReceiptInd()
     * @uses DonationType::setCountryCode()
     * @uses DonationType::setStateCode()
     * @param \Ammonkc\Otaehi\StructType\FrontOfficeInfo $frontOfficeInfo
     * @param \Ammonkc\Otaehi\StructType\CreditCardInfo $creditCardInfo
     * @param \Ammonkc\Otaehi\StructType\DonorInfo $donorInfo
     * @param mixed $tPA_Extensions
     * @param string $language
     * @param string $gDS_ID
     * @param bool $askForReceiptInd
     * @param  $countryCode
     * @param  $stateCode
     */
    public function __construct(\Ammonkc\Otaehi\StructType\FrontOfficeInfo $frontOfficeInfo = null, \Ammonkc\Otaehi\StructType\CreditCardInfo $creditCardInfo = null, \Ammonkc\Otaehi\StructType\DonorInfo $donorInfo = null, $tPA_Extensions = null, $language = null, $gDS_ID = null, $askForReceiptInd = null,  $countryCode = null,  $stateCode = null)
    {
        $this
            ->setFrontOfficeInfo($frontOfficeInfo)
            ->setCreditCardInfo($creditCardInfo)
            ->setDonorInfo($donorInfo)
            ->setTPA_Extensions($tPA_Extensions)
            ->setLanguage($language)
            ->setGDS_ID($gDS_ID)
            ->setAskForReceiptInd($askForReceiptInd)
            ->setCountryCode($countryCode)
            ->setStateCode($stateCode);
    }
    /**
     * Get FrontOfficeInfo value
     * @return \Ammonkc\Otaehi\StructType\FrontOfficeInfo|null
     */
    public function getFrontOfficeInfo()
    {
        return $this->FrontOfficeInfo;
    }
    /**
     * Set FrontOfficeInfo value
     * @param \Ammonkc\Otaehi\StructType\FrontOfficeInfo $frontOfficeInfo
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setFrontOfficeInfo(\Ammonkc\Otaehi\StructType\FrontOfficeInfo $frontOfficeInfo = null)
    {
        $this->FrontOfficeInfo = $frontOfficeInfo;
        return $this;
    }
    /**
     * Get CreditCardInfo value
     * @return \Ammonkc\Otaehi\StructType\CreditCardInfo|null
     */
    public function getCreditCardInfo()
    {
        return $this->CreditCardInfo;
    }
    /**
     * Set CreditCardInfo value
     * @param \Ammonkc\Otaehi\StructType\CreditCardInfo $creditCardInfo
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setCreditCardInfo(\Ammonkc\Otaehi\StructType\CreditCardInfo $creditCardInfo = null)
    {
        $this->CreditCardInfo = $creditCardInfo;
        return $this;
    }
    /**
     * Get DonorInfo value
     * @return \Ammonkc\Otaehi\StructType\DonorInfo|null
     */
    public function getDonorInfo()
    {
        return $this->DonorInfo;
    }
    /**
     * Set DonorInfo value
     * @param \Ammonkc\Otaehi\StructType\DonorInfo $donorInfo
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setDonorInfo(\Ammonkc\Otaehi\StructType\DonorInfo $donorInfo = null)
    {
        $this->DonorInfo = $donorInfo;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get GDS_ID value
     * @return string|null
     */
    public function getGDS_ID()
    {
        return $this->GDS_ID;
    }
    /**
     * Set GDS_ID value
     * @param string $gDS_ID
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setGDS_ID($gDS_ID = null)
    {
        // validation for constraint: string
        if (!is_null($gDS_ID) && !is_string($gDS_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gDS_ID)), __LINE__);
        }
        $this->GDS_ID = $gDS_ID;
        return $this;
    }
    /**
     * Get AskForReceiptInd value
     * @return bool|null
     */
    public function getAskForReceiptInd()
    {
        return $this->AskForReceiptInd;
    }
    /**
     * Set AskForReceiptInd value
     * @param bool $askForReceiptInd
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setAskForReceiptInd($askForReceiptInd = null)
    {
        $this->AskForReceiptInd = $askForReceiptInd;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return |null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param  $countryCode
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setCountryCode( $countryCode = null)
    {
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get StateCode value
     * @return |null
     */
    public function getStateCode()
    {
        return $this->StateCode;
    }
    /**
     * Set StateCode value
     * @param  $stateCode
     * @return \Ammonkc\Otaehi\StructType\DonationType
     */
    public function setStateCode( $stateCode = null)
    {
        $this->StateCode = $stateCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\DonationType
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
