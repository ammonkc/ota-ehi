<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationAdditionalDetailsType StructType
 * @subpackage Structs
 */
class VehicleLocationAdditionalDetailsType extends AbstractStructBase
{
    /**
     * The VehRentLocInfos
     * @var \ammonkc\otaehi\StructType\VehRentLocInfos
     */
    public $VehRentLocInfos;
    /**
     * The ParkLocation
     * @var mixed
     */
    public $ParkLocation;
    /**
     * The CounterLocation
     * @var mixed
     */
    public $CounterLocation;
    /**
     * The OperationSchedules
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The Shuttle
     * @var \ammonkc\otaehi\StructType\Shuttle
     */
    public $Shuttle;
    /**
     * The OneWayDropLocations
     * @var \ammonkc\otaehi\StructType\OneWayDropLocations
     */
    public $OneWayDropLocations;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleLocationAdditionalDetailsType
     * @uses VehicleLocationAdditionalDetailsType::setVehRentLocInfos()
     * @uses VehicleLocationAdditionalDetailsType::setParkLocation()
     * @uses VehicleLocationAdditionalDetailsType::setCounterLocation()
     * @uses VehicleLocationAdditionalDetailsType::setOperationSchedules()
     * @uses VehicleLocationAdditionalDetailsType::setShuttle()
     * @uses VehicleLocationAdditionalDetailsType::setOneWayDropLocations()
     * @uses VehicleLocationAdditionalDetailsType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\VehRentLocInfos $vehRentLocInfos
     * @param mixed $parkLocation
     * @param mixed $counterLocation
     * @param mixed $operationSchedules
     * @param \ammonkc\otaehi\StructType\Shuttle $shuttle
     * @param \ammonkc\otaehi\StructType\OneWayDropLocations $oneWayDropLocations
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\VehRentLocInfos $vehRentLocInfos = null, $parkLocation = null, $counterLocation = null, $operationSchedules = null, \ammonkc\otaehi\StructType\Shuttle $shuttle = null, \ammonkc\otaehi\StructType\OneWayDropLocations $oneWayDropLocations = null, $tPA_Extensions = null)
    {
        $this
            ->setVehRentLocInfos($vehRentLocInfos)
            ->setParkLocation($parkLocation)
            ->setCounterLocation($counterLocation)
            ->setOperationSchedules($operationSchedules)
            ->setShuttle($shuttle)
            ->setOneWayDropLocations($oneWayDropLocations)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get VehRentLocInfos value
     * @return \ammonkc\otaehi\StructType\VehRentLocInfos|null
     */
    public function getVehRentLocInfos()
    {
        return $this->VehRentLocInfos;
    }
    /**
     * Set VehRentLocInfos value
     * @param \ammonkc\otaehi\StructType\VehRentLocInfos $vehRentLocInfos
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setVehRentLocInfos(\ammonkc\otaehi\StructType\VehRentLocInfos $vehRentLocInfos = null)
    {
        $this->VehRentLocInfos = $vehRentLocInfos;
        return $this;
    }
    /**
     * Get ParkLocation value
     * @return mixed|null
     */
    public function getParkLocation()
    {
        return $this->ParkLocation;
    }
    /**
     * Set ParkLocation value
     * @param mixed $parkLocation
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setParkLocation($parkLocation = null)
    {
        $this->ParkLocation = $parkLocation;
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return mixed|null
     */
    public function getCounterLocation()
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param mixed $counterLocation
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setCounterLocation($counterLocation = null)
    {
        $this->CounterLocation = $counterLocation;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get Shuttle value
     * @return \ammonkc\otaehi\StructType\Shuttle|null
     */
    public function getShuttle()
    {
        return $this->Shuttle;
    }
    /**
     * Set Shuttle value
     * @param \ammonkc\otaehi\StructType\Shuttle $shuttle
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setShuttle(\ammonkc\otaehi\StructType\Shuttle $shuttle = null)
    {
        $this->Shuttle = $shuttle;
        return $this;
    }
    /**
     * Get OneWayDropLocations value
     * @return \ammonkc\otaehi\StructType\OneWayDropLocations|null
     */
    public function getOneWayDropLocations()
    {
        return $this->OneWayDropLocations;
    }
    /**
     * Set OneWayDropLocations value
     * @param \ammonkc\otaehi\StructType\OneWayDropLocations $oneWayDropLocations
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setOneWayDropLocations(\ammonkc\otaehi\StructType\OneWayDropLocations $oneWayDropLocations = null)
    {
        $this->OneWayDropLocations = $oneWayDropLocations;
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
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
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
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalDetailsType
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
