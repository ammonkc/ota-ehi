<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationVehiclesType StructType
 * @subpackage Structs
 */
class VehicleLocationVehiclesType extends AbstractStructBase
{
    /**
     * The VehicleInfos
     * @var \ammonkc\otaehi\StructType\VehicleInfos
     */
    public $VehicleInfos;
    /**
     * The Vehicle
     * @var \ammonkc\otaehi\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * Constructor method for VehicleLocationVehiclesType
     * @uses VehicleLocationVehiclesType::setVehicleInfos()
     * @uses VehicleLocationVehiclesType::setVehicle()
     * @param \ammonkc\otaehi\StructType\VehicleInfos $vehicleInfos
     * @param \ammonkc\otaehi\StructType\Vehicle $vehicle
     */
    public function __construct(\ammonkc\otaehi\StructType\VehicleInfos $vehicleInfos = null, \ammonkc\otaehi\StructType\Vehicle $vehicle = null)
    {
        $this
            ->setVehicleInfos($vehicleInfos)
            ->setVehicle($vehicle);
    }
    /**
     * Get VehicleInfos value
     * @return \ammonkc\otaehi\StructType\VehicleInfos|null
     */
    public function getVehicleInfos()
    {
        return $this->VehicleInfos;
    }
    /**
     * Set VehicleInfos value
     * @param \ammonkc\otaehi\StructType\VehicleInfos $vehicleInfos
     * @return \ammonkc\otaehi\StructType\VehicleLocationVehiclesType
     */
    public function setVehicleInfos(\ammonkc\otaehi\StructType\VehicleInfos $vehicleInfos = null)
    {
        $this->VehicleInfos = $vehicleInfos;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \ammonkc\otaehi\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \ammonkc\otaehi\StructType\Vehicle $vehicle
     * @return \ammonkc\otaehi\StructType\VehicleLocationVehiclesType
     */
    public function setVehicle(\ammonkc\otaehi\StructType\Vehicle $vehicle = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleLocationVehiclesType
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
