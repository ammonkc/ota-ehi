<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCancelRQAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleCancelRQAdditionalInfoType extends AbstractStructBase
{
    /**
     * The CustLoyalty
     * @var \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The Telephone
     * @var \Ammonkc\Otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Vendor
     * @var \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The RentalInfo
     * @var \Ammonkc\Otaehi\StructType\RentalInfo
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
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @param \Ammonkc\Otaehi\StructType\CompanyNameType $vendor
     * @param \Ammonkc\Otaehi\StructType\RentalInfo $rentalInfo
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null, \Ammonkc\Otaehi\StructType\Telephone $telephone = null, \Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null, \Ammonkc\Otaehi\StructType\RentalInfo $rentalInfo = null, $tPA_Extensions = null)
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
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setCustLoyalty(\Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Ammonkc\Otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setTelephone(\Ammonkc\Otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Ammonkc\Otaehi\StructType\CompanyNameType $vendor
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setVendor(\Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get RentalInfo value
     * @return \Ammonkc\Otaehi\StructType\RentalInfo|null
     */
    public function getRentalInfo()
    {
        return $this->RentalInfo;
    }
    /**
     * Set RentalInfo value
     * @param \Ammonkc\Otaehi\StructType\RentalInfo $rentalInfo
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public function setRentalInfo(\Ammonkc\Otaehi\StructType\RentalInfo $rentalInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType
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
