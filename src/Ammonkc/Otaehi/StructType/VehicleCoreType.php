<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCoreType StructType
 * @subpackage Structs
 */
class VehicleCoreType extends AbstractStructBase
{
    /**
     * The VehType
     * @var \Ammonkc\Otaehi\StructType\VehType
     */
    public $VehType;
    /**
     * The VehClass
     * @var \Ammonkc\Otaehi\StructType\VehClass
     */
    public $VehClass;
    /**
     * The AirConditionInd
     * @var bool
     */
    public $AirConditionInd;
    /**
     * The TransmissionType
     * @var UNKNOWN
     */
    public $TransmissionType;
    /**
     * The FuelType
     * @var string
     */
    public $FuelType;
    /**
     * The DriveType
     * @var string
     */
    public $DriveType;
    /**
     * Constructor method for VehicleCoreType
     * @uses VehicleCoreType::setVehType()
     * @uses VehicleCoreType::setVehClass()
     * @uses VehicleCoreType::setAirConditionInd()
     * @uses VehicleCoreType::setTransmissionType()
     * @uses VehicleCoreType::setFuelType()
     * @uses VehicleCoreType::setDriveType()
     * @param \Ammonkc\Otaehi\StructType\VehType $vehType
     * @param \Ammonkc\Otaehi\StructType\VehClass $vehClass
     * @param bool $airConditionInd
     * @param UNKNOWN $transmissionType
     * @param string $fuelType
     * @param string $driveType
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehType $vehType = null, \Ammonkc\Otaehi\StructType\VehClass $vehClass = null, $airConditionInd = null, UNKNOWN $transmissionType = null, $fuelType = null, $driveType = null)
    {
        $this
            ->setVehType($vehType)
            ->setVehClass($vehClass)
            ->setAirConditionInd($airConditionInd)
            ->setTransmissionType($transmissionType)
            ->setFuelType($fuelType)
            ->setDriveType($driveType);
    }
    /**
     * Get VehType value
     * @return \Ammonkc\Otaehi\StructType\VehType|null
     */
    public function getVehType()
    {
        return $this->VehType;
    }
    /**
     * Set VehType value
     * @param \Ammonkc\Otaehi\StructType\VehType $vehType
     * @return \Ammonkc\Otaehi\StructType\VehicleCoreType
     */
    public function setVehType(\Ammonkc\Otaehi\StructType\VehType $vehType = null)
    {
        $this->VehType = $vehType;
        return $this;
    }
    /**
     * Get VehClass value
     * @return \Ammonkc\Otaehi\StructType\VehClass|null
     */
    public function getVehClass()
    {
        return $this->VehClass;
    }
    /**
     * Set VehClass value
     * @param \Ammonkc\Otaehi\StructType\VehClass $vehClass
     * @return \Ammonkc\Otaehi\StructType\VehicleCoreType
     */
    public function setVehClass(\Ammonkc\Otaehi\StructType\VehClass $vehClass = null)
    {
        $this->VehClass = $vehClass;
        return $this;
    }
    /**
     * Get AirConditionInd value
     * @return bool|null
     */
    public function getAirConditionInd()
    {
        return $this->AirConditionInd;
    }
    /**
     * Set AirConditionInd value
     * @param bool $airConditionInd
     * @return \Ammonkc\Otaehi\StructType\VehicleCoreType
     */
    public function setAirConditionInd($airConditionInd = null)
    {
        $this->AirConditionInd = $airConditionInd;
        return $this;
    }
    /**
     * Get TransmissionType value
     * @return UNKNOWN|null
     */
    public function getTransmissionType()
    {
        return $this->TransmissionType;
    }
    /**
     * Set TransmissionType value
     * @param UNKNOWN $transmissionType
     * @return \Ammonkc\Otaehi\StructType\VehicleCoreType
     */
    public function setTransmissionType(UNKNOWN $transmissionType = null)
    {
        $this->TransmissionType = $transmissionType;
        return $this;
    }
    /**
     * Get FuelType value
     * @return string|null
     */
    public function getFuelType()
    {
        return $this->FuelType;
    }
    /**
     * Set FuelType value
     * @param string $fuelType
     * @return \Ammonkc\Otaehi\StructType\VehicleCoreType
     */
    public function setFuelType($fuelType = null)
    {
        // validation for constraint: string
        if (!is_null($fuelType) && !is_string($fuelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuelType)), __LINE__);
        }
        $this->FuelType = $fuelType;
        return $this;
    }
    /**
     * Get DriveType value
     * @return string|null
     */
    public function getDriveType()
    {
        return $this->DriveType;
    }
    /**
     * Set DriveType value
     * @param string $driveType
     * @return \Ammonkc\Otaehi\StructType\VehicleCoreType
     */
    public function setDriveType($driveType = null)
    {
        // validation for constraint: string
        if (!is_null($driveType) && !is_string($driveType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($driveType)), __LINE__);
        }
        $this->DriveType = $driveType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleCoreType
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
