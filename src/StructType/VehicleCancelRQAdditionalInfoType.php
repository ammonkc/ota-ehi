<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCancelRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleCancelRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The CustLoyalty
     * @var \ammonkc\otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The Telephone
     * @var \ammonkc\otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Vendor
     * @var \ammonkc\otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The RentalInfo
     * @var \ammonkc\otaehi\StructType\RentalInfo
     */
    public $RentalInfo;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleCancelRQAdditionalInfoType
     * @uses VehicleCancelRQAdditionalInfoType::setCustLoyalty()
     * @uses VehicleCancelRQAdditionalInfoType::setTelephone()
     * @uses VehicleCancelRQAdditionalInfoType::setVendor()
     * @uses VehicleCancelRQAdditionalInfoType::setRentalInfo()
     * @uses VehicleCancelRQAdditionalInfoType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @param \ammonkc\otaehi\StructType\CompanyNameType $vendor
     * @param \ammonkc\otaehi\StructType\RentalInfo $rentalInfo
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null, \ammonkc\otaehi\StructType\Telephone $telephone = null, \ammonkc\otaehi\StructType\CompanyNameType $vendor = null, \ammonkc\otaehi\StructType\RentalInfo $rentalInfo = null, $tPA_Extensions = null)
    {
        $this
            ->setCustLoyalty($custLoyalty)
            ->setTelephone($telephone)
            ->setVendor($vendor)
            ->setRentalInfo($rentalInfo)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get CustLoyalty value
     * @return \ammonkc\otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @return \ammonkc\otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setCustLoyalty(\ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \ammonkc\otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @return \ammonkc\otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setTelephone(\ammonkc\otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \ammonkc\otaehi\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \ammonkc\otaehi\StructType\CompanyNameType $vendor
     * @return \ammonkc\otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setVendor(\ammonkc\otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get RentalInfo value
     * @return \ammonkc\otaehi\StructType\RentalInfo|null
     */
    public function getRentalInfo()
    {
        return $this->RentalInfo;
    }
    /**
     * Set RentalInfo value
     * @param \ammonkc\otaehi\StructType\RentalInfo $rentalInfo
     * @return \ammonkc\otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setRentalInfo(\ammonkc\otaehi\StructType\RentalInfo $rentalInfo = null)
    {
        $this->RentalInfo = $rentalInfo;
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
     * @return \ammonkc\otaehi\StructType\VehicleCancelRQAdditionalInfoType
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
     * @return \ammonkc\otaehi\StructType\VehicleCancelRQAdditionalInfoType
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
