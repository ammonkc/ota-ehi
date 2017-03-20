<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifierType StructType
 * @subpackage Structs
 */
class RateQualifierType extends AbstractStructBase
{
    /**
     * The PromoDesc
     * @var string
     */
    public $PromoDesc;
    /**
     * The RateComments
     * @var \Ammonkc\Otaehi\StructType\RateComments
     */
    public $RateComments;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ArriveByFlight
     * @var bool
     */
    public $ArriveByFlight;
    /**
     * The RateAuthorizationCode
     * @var
     */
    public $RateAuthorizationCode;
    /**
     * The VendorRateID
     * @var
     */
    public $VendorRateID;
    /**
     * Constructor method for RateQualifierType
     * @uses RateQualifierType::setPromoDesc()
     * @uses RateQualifierType::setRateComments()
     * @uses RateQualifierType::setTPA_Extensions()
     * @uses RateQualifierType::setArriveByFlight()
     * @uses RateQualifierType::setRateAuthorizationCode()
     * @uses RateQualifierType::setVendorRateID()
     * @param string $promoDesc
     * @param \Ammonkc\Otaehi\StructType\RateComments $rateComments
     * @param mixed $tPA_Extensions
     * @param bool $arriveByFlight
     * @param  $rateAuthorizationCode
     * @param  $vendorRateID
     */
    public function __construct($promoDesc = null, \Ammonkc\Otaehi\StructType\RateComments $rateComments = null, $tPA_Extensions = null, $arriveByFlight = null,  $rateAuthorizationCode = null,  $vendorRateID = null)
    {
        $this
            ->setPromoDesc($promoDesc)
            ->setRateComments($rateComments)
            ->setTPA_Extensions($tPA_Extensions)
            ->setArriveByFlight($arriveByFlight)
            ->setRateAuthorizationCode($rateAuthorizationCode)
            ->setVendorRateID($vendorRateID);
    }
    /**
     * Get PromoDesc value
     * @return string|null
     */
    public function getPromoDesc()
    {
        return $this->PromoDesc;
    }
    /**
     * Set PromoDesc value
     * @param string $promoDesc
     * @return \Ammonkc\Otaehi\StructType\RateQualifierType
     */
    public function setPromoDesc($promoDesc = null)
    {
        // validation for constraint: string
        if (!is_null($promoDesc) && !is_string($promoDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promoDesc)), __LINE__);
        }
        $this->PromoDesc = $promoDesc;
        return $this;
    }
    /**
     * Get RateComments value
     * @return \Ammonkc\Otaehi\StructType\RateComments|null
     */
    public function getRateComments()
    {
        return $this->RateComments;
    }
    /**
     * Set RateComments value
     * @param \Ammonkc\Otaehi\StructType\RateComments $rateComments
     * @return \Ammonkc\Otaehi\StructType\RateQualifierType
     */
    public function setRateComments(\Ammonkc\Otaehi\StructType\RateComments $rateComments = null)
    {
        $this->RateComments = $rateComments;
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
     * @return \Ammonkc\Otaehi\StructType\RateQualifierType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ArriveByFlight value
     * @return bool|null
     */
    public function getArriveByFlight()
    {
        return $this->ArriveByFlight;
    }
    /**
     * Set ArriveByFlight value
     * @param bool $arriveByFlight
     * @return \Ammonkc\Otaehi\StructType\RateQualifierType
     */
    public function setArriveByFlight($arriveByFlight = null)
    {
        $this->ArriveByFlight = $arriveByFlight;
        return $this;
    }
    /**
     * Get RateAuthorizationCode value
     * @return |null
     */
    public function getRateAuthorizationCode()
    {
        return $this->RateAuthorizationCode;
    }
    /**
     * Set RateAuthorizationCode value
     * @param  $rateAuthorizationCode
     * @return \Ammonkc\Otaehi\StructType\RateQualifierType
     */
    public function setRateAuthorizationCode( $rateAuthorizationCode = null)
    {
        $this->RateAuthorizationCode = $rateAuthorizationCode;
        return $this;
    }
    /**
     * Get VendorRateID value
     * @return |null
     */
    public function getVendorRateID()
    {
        return $this->VendorRateID;
    }
    /**
     * Set VendorRateID value
     * @param  $vendorRateID
     * @return \Ammonkc\Otaehi\StructType\RateQualifierType
     */
    public function setVendorRateID( $vendorRateID = null)
    {
        $this->VendorRateID = $vendorRateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RateQualifierType
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
