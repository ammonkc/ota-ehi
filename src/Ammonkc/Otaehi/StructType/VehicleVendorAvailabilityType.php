<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleVendorAvailabilityType StructType
 * @subpackage Structs
 */
class VehicleVendorAvailabilityType extends AbstractStructBase
{
    /**
     * The Vendor
     * @var mixed
     */
    public $Vendor;
    /**
     * The VehAvails
     * @var \Ammonkc\Otaehi\StructType\VehAvails
     */
    public $VehAvails;
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for VehicleVendorAvailabilityType
     * @uses VehicleVendorAvailabilityType::setVendor()
     * @uses VehicleVendorAvailabilityType::setVehAvails()
     * @uses VehicleVendorAvailabilityType::setInfo()
     * @param mixed $vendor
     * @param \Ammonkc\Otaehi\StructType\VehAvails $vehAvails
     * @param mixed $info
     */
    public function __construct($vendor = null, \Ammonkc\Otaehi\StructType\VehAvails $vehAvails = null, $info = null)
    {
        $this
            ->setVendor($vendor)
            ->setVehAvails($vehAvails)
            ->setInfo($info);
    }
    /**
     * Get Vendor value
     * @return mixed|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param mixed $vendor
     * @return \Ammonkc\Otaehi\StructType\VehicleVendorAvailabilityType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VehAvails value
     * @return \Ammonkc\Otaehi\StructType\VehAvails|null
     */
    public function getVehAvails()
    {
        return $this->VehAvails;
    }
    /**
     * Set VehAvails value
     * @param \Ammonkc\Otaehi\StructType\VehAvails $vehAvails
     * @return \Ammonkc\Otaehi\StructType\VehicleVendorAvailabilityType
     */
    public function setVehAvails(\Ammonkc\Otaehi\StructType\VehAvails $vehAvails = null)
    {
        $this->VehAvails = $vehAvails;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Ammonkc\Otaehi\StructType\VehicleVendorAvailabilityType
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleVendorAvailabilityType
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
