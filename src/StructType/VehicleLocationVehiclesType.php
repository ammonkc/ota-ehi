<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationVehiclesType StructType
 * @subpackage Structs
 */
class VehicleLocationVehiclesType extends AbstractStructBase
{
    /**
     * The VehicleInfos
     * @var \Ammonkc\Otaehi\StructType\VehicleInfos
     */
    public $VehicleInfos;
    /**
     * The Vehicle
     * @var \Ammonkc\Otaehi\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * Constructor method for VehicleLocationVehiclesType
     * @uses VehicleLocationVehiclesType::setVehicleInfos()
     * @uses VehicleLocationVehiclesType::setVehicle()
     * @param \Ammonkc\Otaehi\StructType\VehicleInfos $vehicleInfos
     * @param \Ammonkc\Otaehi\StructType\Vehicle $vehicle
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehicleInfos $vehicleInfos = null, \Ammonkc\Otaehi\StructType\Vehicle $vehicle = null)
    {
        $this
            ->setVehicleInfos($vehicleInfos)
            ->setVehicle($vehicle);
    }
    /**
     * Get VehicleInfos value
     * @return \Ammonkc\Otaehi\StructType\VehicleInfos|null
     */
    public function getVehicleInfos()
    {
        return $this->VehicleInfos;
    }
    /**
     * Set VehicleInfos value
     * @param \Ammonkc\Otaehi\StructType\VehicleInfos $vehicleInfos
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType
     */
    public function setVehicleInfos(\Ammonkc\Otaehi\StructType\VehicleInfos $vehicleInfos = null)
    {
        $this->VehicleInfos = $vehicleInfos;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType
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
