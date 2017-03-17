<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipCharge StructType
 * @subpackage Structs
 */
class EquipCharge extends AbstractStructBase
{
    /**
     * The Vehicles
     * @var \Ammonkc\Otaehi\StructType\Vehicles
     */
    public $Vehicles;
    /**
     * Constructor method for EquipCharge
     * @uses EquipCharge::setVehicles()
     * @param \Ammonkc\Otaehi\StructType\Vehicles $vehicles
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Vehicles $vehicles = null)
    {
        $this
            ->setVehicles($vehicles);
    }
    /**
     * Get Vehicles value
     * @return \Ammonkc\Otaehi\StructType\Vehicles|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \Ammonkc\Otaehi\StructType\Vehicles $vehicles
     * @return \Ammonkc\Otaehi\StructType\EquipCharge
     */
    public function setVehicles(\Ammonkc\Otaehi\StructType\Vehicles $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\EquipCharge
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
