<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailVendorInfoType StructType
 * @subpackage Structs
 */
class VehicleAvailVendorInfoType extends AbstractStructBase
{
    /**
     * The VendorMessages
     * @var mixed
     */
    public $VendorMessages;
    /**
     * The OffLocServices
     * @var mixed
     */
    public $OffLocServices;
    /**
     * The PaymentRules
     * @var mixed
     */
    public $PaymentRules;
    /**
     * The LocationDetails
     * @var mixed
     */
    public $LocationDetails;
    /**
     * The TourInfo
     * @var \ammonkc\otaehi\StructType\TourInfo
     */
    public $TourInfo;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleAvailVendorInfoType
     * @uses VehicleAvailVendorInfoType::setVendorMessages()
     * @uses VehicleAvailVendorInfoType::setOffLocServices()
     * @uses VehicleAvailVendorInfoType::setPaymentRules()
     * @uses VehicleAvailVendorInfoType::setLocationDetails()
     * @uses VehicleAvailVendorInfoType::setTourInfo()
     * @uses VehicleAvailVendorInfoType::setTPA_Extensions()
     * @param mixed $vendorMessages
     * @param mixed $offLocServices
     * @param mixed $paymentRules
     * @param mixed $locationDetails
     * @param \ammonkc\otaehi\StructType\TourInfo $tourInfo
     * @param mixed $tPA_Extensions
     */
    public function __construct($vendorMessages = null, $offLocServices = null, $paymentRules = null, $locationDetails = null, \ammonkc\otaehi\StructType\TourInfo $tourInfo = null, $tPA_Extensions = null)
    {
        $this
            ->setVendorMessages($vendorMessages)
            ->setOffLocServices($offLocServices)
            ->setPaymentRules($paymentRules)
            ->setLocationDetails($locationDetails)
            ->setTourInfo($tourInfo)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get VendorMessages value
     * @return mixed|null
     */
    public function getVendorMessages()
    {
        return $this->VendorMessages;
    }
    /**
     * Set VendorMessages value
     * @param mixed $vendorMessages
     * @return \ammonkc\otaehi\StructType\VehicleAvailVendorInfoType
     */
    public function setVendorMessages($vendorMessages = null)
    {
        $this->VendorMessages = $vendorMessages;
        return $this;
    }
    /**
     * Get OffLocServices value
     * @return mixed|null
     */
    public function getOffLocServices()
    {
        return $this->OffLocServices;
    }
    /**
     * Set OffLocServices value
     * @param mixed $offLocServices
     * @return \ammonkc\otaehi\StructType\VehicleAvailVendorInfoType
     */
    public function setOffLocServices($offLocServices = null)
    {
        $this->OffLocServices = $offLocServices;
        return $this;
    }
    /**
     * Get PaymentRules value
     * @return mixed|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param mixed $paymentRules
     * @return \ammonkc\otaehi\StructType\VehicleAvailVendorInfoType
     */
    public function setPaymentRules($paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get LocationDetails value
     * @return mixed|null
     */
    public function getLocationDetails()
    {
        return $this->LocationDetails;
    }
    /**
     * Set LocationDetails value
     * @param mixed $locationDetails
     * @return \ammonkc\otaehi\StructType\VehicleAvailVendorInfoType
     */
    public function setLocationDetails($locationDetails = null)
    {
        $this->LocationDetails = $locationDetails;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return \ammonkc\otaehi\StructType\TourInfo|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param \ammonkc\otaehi\StructType\TourInfo $tourInfo
     * @return \ammonkc\otaehi\StructType\VehicleAvailVendorInfoType
     */
    public function setTourInfo(\ammonkc\otaehi\StructType\TourInfo $tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailVendorInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleAvailVendorInfoType
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
