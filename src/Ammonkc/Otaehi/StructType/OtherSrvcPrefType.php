<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherSrvcPrefType StructType
 * @subpackage Structs
 */
class OtherSrvcPrefType extends AbstractStructBase
{
    /**
     * The OtherSrvcName
     * @var mixed
     */
    public $OtherSrvcName;
    /**
     * The VendorPref
     * @var mixed
     */
    public $VendorPref;
    /**
     * The LoyaltyPref
     * @var mixed
     */
    public $LoyaltyPref;
    /**
     * The PaymentFormPref
     * @var mixed
     */
    public $PaymentFormPref;
    /**
     * The SpecRequestPref
     * @var mixed
     */
    public $SpecRequestPref;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The TravelPurpose
     * @var UNKNOWN
     */
    public $TravelPurpose;
    /**
     * Constructor method for OtherSrvcPrefType
     * @uses OtherSrvcPrefType::setOtherSrvcName()
     * @uses OtherSrvcPrefType::setVendorPref()
     * @uses OtherSrvcPrefType::setLoyaltyPref()
     * @uses OtherSrvcPrefType::setPaymentFormPref()
     * @uses OtherSrvcPrefType::setSpecRequestPref()
     * @uses OtherSrvcPrefType::setTPA_Extensions()
     * @uses OtherSrvcPrefType::setTravelPurpose()
     * @param mixed $otherSrvcName
     * @param mixed $vendorPref
     * @param mixed $loyaltyPref
     * @param mixed $paymentFormPref
     * @param mixed $specRequestPref
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $travelPurpose
     */
    public function __construct($otherSrvcName = null, $vendorPref = null, $loyaltyPref = null, $paymentFormPref = null, $specRequestPref = null, $tPA_Extensions = null, UNKNOWN $travelPurpose = null)
    {
        $this
            ->setOtherSrvcName($otherSrvcName)
            ->setVendorPref($vendorPref)
            ->setLoyaltyPref($loyaltyPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setSpecRequestPref($specRequestPref)
            ->setTPA_Extensions($tPA_Extensions)
            ->setTravelPurpose($travelPurpose);
    }
    /**
     * Get OtherSrvcName value
     * @return mixed|null
     */
    public function getOtherSrvcName()
    {
        return $this->OtherSrvcName;
    }
    /**
     * Set OtherSrvcName value
     * @param mixed $otherSrvcName
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
     */
    public function setOtherSrvcName($otherSrvcName = null)
    {
        $this->OtherSrvcName = $otherSrvcName;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return mixed|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @param mixed $vendorPref
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
     */
    public function setVendorPref($vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get LoyaltyPref value
     * @return mixed|null
     */
    public function getLoyaltyPref()
    {
        return $this->LoyaltyPref;
    }
    /**
     * Set LoyaltyPref value
     * @param mixed $loyaltyPref
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
     */
    public function setLoyaltyPref($loyaltyPref = null)
    {
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Get PaymentFormPref value
     * @return mixed|null
     */
    public function getPaymentFormPref()
    {
        return $this->PaymentFormPref;
    }
    /**
     * Set PaymentFormPref value
     * @param mixed $paymentFormPref
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
     */
    public function setPaymentFormPref($paymentFormPref = null)
    {
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Get SpecRequestPref value
     * @return mixed|null
     */
    public function getSpecRequestPref()
    {
        return $this->SpecRequestPref;
    }
    /**
     * Set SpecRequestPref value
     * @param mixed $specRequestPref
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
     */
    public function setSpecRequestPref($specRequestPref = null)
    {
        $this->SpecRequestPref = $specRequestPref;
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
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get TravelPurpose value
     * @return UNKNOWN|null
     */
    public function getTravelPurpose()
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param UNKNOWN $travelPurpose
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
     */
    public function setTravelPurpose(UNKNOWN $travelPurpose = null)
    {
        $this->TravelPurpose = $travelPurpose;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OtherSrvcPrefType
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
