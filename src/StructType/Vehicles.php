<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicles StructType
 * @subpackage Structs
 */
class Vehicles extends AbstractStructBase
{
    /**
     * The Vehicle
     * @var \Ammonkc\Otaehi\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * Constructor method for Vehicles
     * @uses Vehicles::setVehicle()
     * @param \Ammonkc\Otaehi\StructType\Vehicle $vehicle
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Vehicle $vehicle = null)
    {
        $this
            ->setVehicle($vehicle);
    }
    /**
     * Get Vehicle value
     * @return \Ammonkc\Otaehi\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Ammonkc\Otaehi\StructType\Vehicle $vehicle
     * @return \Ammonkc\Otaehi\StructType\Vehicles
     */
    public function setVehicle(\Ammonkc\Otaehi\StructType\Vehicle $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Vehicles
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
