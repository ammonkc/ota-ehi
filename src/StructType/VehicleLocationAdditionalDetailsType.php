<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationAdditionalDetailsType StructType
 * @subpackage Structs
 */
class VehicleLocationAdditionalDetailsType extends AbstractStructBase
{
    /**
     * The VehRentLocInfos
     * @var \Ammonkc\Otaehi\StructType\VehRentLocInfos
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
     * @var \Ammonkc\Otaehi\StructType\Shuttle
     */
    public $Shuttle;
    /**
     * The OneWayDropLocations
     * @var \Ammonkc\Otaehi\StructType\OneWayDropLocations
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
     * @param \Ammonkc\Otaehi\StructType\VehRentLocInfos $vehRentLocInfos
     * @param mixed $parkLocation
     * @param mixed $counterLocation
     * @param mixed $operationSchedules
     * @param \Ammonkc\Otaehi\StructType\Shuttle $shuttle
     * @param \Ammonkc\Otaehi\StructType\OneWayDropLocations $oneWayDropLocations
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehRentLocInfos $vehRentLocInfos = null, $parkLocation = null, $counterLocation = null, $operationSchedules = null, \Ammonkc\Otaehi\StructType\Shuttle $shuttle = null, \Ammonkc\Otaehi\StructType\OneWayDropLocations $oneWayDropLocations = null, $tPA_Extensions = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehRentLocInfos|null
     */
    public function getVehRentLocInfos()
    {
        return $this->VehRentLocInfos;
    }
    /**
     * Set VehRentLocInfos value
     * @param \Ammonkc\Otaehi\StructType\VehRentLocInfos $vehRentLocInfos
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setVehRentLocInfos(\Ammonkc\Otaehi\StructType\VehRentLocInfos $vehRentLocInfos = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get Shuttle value
     * @return \Ammonkc\Otaehi\StructType\Shuttle|null
     */
    public function getShuttle()
    {
        return $this->Shuttle;
    }
    /**
     * Set Shuttle value
     * @param \Ammonkc\Otaehi\StructType\Shuttle $shuttle
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setShuttle(\Ammonkc\Otaehi\StructType\Shuttle $shuttle = null)
    {
        $this->Shuttle = $shuttle;
        return $this;
    }
    /**
     * Get OneWayDropLocations value
     * @return \Ammonkc\Otaehi\StructType\OneWayDropLocations|null
     */
    public function getOneWayDropLocations()
    {
        return $this->OneWayDropLocations;
    }
    /**
     * Set OneWayDropLocations value
     * @param \Ammonkc\Otaehi\StructType\OneWayDropLocations $oneWayDropLocations
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setOneWayDropLocations(\Ammonkc\Otaehi\StructType\OneWayDropLocations $oneWayDropLocations = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalDetailsType
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
