<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRSCoreType StructType
 * @subpackage Structs
 */
class VehicleAvailRSCoreType extends AbstractStructBase
{
    /**
     * The VehRentalCore
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The VehVendorAvails
     * @var \Ammonkc\Otaehi\StructType\VehVendorAvails
     */
    public $VehVendorAvails;
    /**
     * Constructor method for VehicleAvailRSCoreType
     * @uses VehicleAvailRSCoreType::setVehRentalCore()
     * @uses VehicleAvailRSCoreType::setVehVendorAvails()
     * @param mixed $vehRentalCore
     * @param \Ammonkc\Otaehi\StructType\VehVendorAvails $vehVendorAvails
     */
    public function __construct($vehRentalCore = null, \Ammonkc\Otaehi\StructType\VehVendorAvails $vehVendorAvails = null)
    {
        $this
            ->setVehRentalCore($vehRentalCore)
            ->setVehVendorAvails($vehVendorAvails);
    }
    /**
     * Get VehRentalCore value
     * @return mixed|null
     */
    public function getVehRentalCore()
    {
        return $this->VehRentalCore;
    }
    /**
     * Set VehRentalCore value
     * @param mixed $vehRentalCore
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRSCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get VehVendorAvails value
     * @return \Ammonkc\Otaehi\StructType\VehVendorAvails|null
     */
    public function getVehVendorAvails()
    {
        return $this->VehVendorAvails;
    }
    /**
     * Set VehVendorAvails value
     * @param \Ammonkc\Otaehi\StructType\VehVendorAvails $vehVendorAvails
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRSCoreType
     */
    public function setVehVendorAvails(\Ammonkc\Otaehi\StructType\VehVendorAvails $vehVendorAvails = null)
    {
        $this->VehVendorAvails = $vehVendorAvails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRSCoreType
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
