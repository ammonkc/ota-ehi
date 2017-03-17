<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCharges StructType
 * @subpackage Structs
 */
class VehicleCharges extends AbstractStructBase
{
    /**
     * The VehicleCharge
     * @var mixed
     */
    public $VehicleCharge;
    /**
     * Constructor method for VehicleCharges
     * @uses VehicleCharges::setVehicleCharge()
     * @param mixed $vehicleCharge
     */
    public function __construct($vehicleCharge = null)
    {
        $this
            ->setVehicleCharge($vehicleCharge);
    }
    /**
     * Get VehicleCharge value
     * @return mixed|null
     */
    public function getVehicleCharge()
    {
        return $this->VehicleCharge;
    }
    /**
     * Set VehicleCharge value
     * @param mixed $vehicleCharge
     * @return \Ammonkc\Otaehi\StructType\VehicleCharges
     */
    public function setVehicleCharge($vehicleCharge = null)
    {
        $this->VehicleCharge = $vehicleCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleCharges
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
