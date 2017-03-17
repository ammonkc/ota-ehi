<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalDetailsType StructType
 * @subpackage Structs
 */
class VehicleRentalDetailsType extends AbstractStructBase
{
    /**
     * The FuelLevelDetails
     * @var \ammonkc\otaehi\StructType\FuelLevelDetails
     */
    public $FuelLevelDetails;
    /**
     * The OdometerReading
     * @var \ammonkc\otaehi\StructType\OdometerReading
     */
    public $OdometerReading;
    /**
     * The ConditionReport
     * @var \ammonkc\otaehi\StructType\ConditionReport
     */
    public $ConditionReport;
    /**
     * The ParkingLocation
     * @var UNKNOWN
     */
    public $ParkingLocation;
    /**
     * Constructor method for VehicleRentalDetailsType
     * @uses VehicleRentalDetailsType::setFuelLevelDetails()
     * @uses VehicleRentalDetailsType::setOdometerReading()
     * @uses VehicleRentalDetailsType::setConditionReport()
     * @uses VehicleRentalDetailsType::setParkingLocation()
     * @param \ammonkc\otaehi\StructType\FuelLevelDetails $fuelLevelDetails
     * @param \ammonkc\otaehi\StructType\OdometerReading $odometerReading
     * @param \ammonkc\otaehi\StructType\ConditionReport $conditionReport
     * @param UNKNOWN $parkingLocation
     */
    public function __construct(\ammonkc\otaehi\StructType\FuelLevelDetails $fuelLevelDetails = null, \ammonkc\otaehi\StructType\OdometerReading $odometerReading = null, \ammonkc\otaehi\StructType\ConditionReport $conditionReport = null, UNKNOWN $parkingLocation = null)
    {
        $this
            ->setFuelLevelDetails($fuelLevelDetails)
            ->setOdometerReading($odometerReading)
            ->setConditionReport($conditionReport)
            ->setParkingLocation($parkingLocation);
    }
    /**
     * Get FuelLevelDetails value
     * @return \ammonkc\otaehi\StructType\FuelLevelDetails|null
     */
    public function getFuelLevelDetails()
    {
        return $this->FuelLevelDetails;
    }
    /**
     * Set FuelLevelDetails value
     * @param \ammonkc\otaehi\StructType\FuelLevelDetails $fuelLevelDetails
     * @return \ammonkc\otaehi\StructType\VehicleRentalDetailsType
     */
    public function setFuelLevelDetails(\ammonkc\otaehi\StructType\FuelLevelDetails $fuelLevelDetails = null)
    {
        $this->FuelLevelDetails = $fuelLevelDetails;
        return $this;
    }
    /**
     * Get OdometerReading value
     * @return \ammonkc\otaehi\StructType\OdometerReading|null
     */
    public function getOdometerReading()
    {
        return $this->OdometerReading;
    }
    /**
     * Set OdometerReading value
     * @param \ammonkc\otaehi\StructType\OdometerReading $odometerReading
     * @return \ammonkc\otaehi\StructType\VehicleRentalDetailsType
     */
    public function setOdometerReading(\ammonkc\otaehi\StructType\OdometerReading $odometerReading = null)
    {
        $this->OdometerReading = $odometerReading;
        return $this;
    }
    /**
     * Get ConditionReport value
     * @return \ammonkc\otaehi\StructType\ConditionReport|null
     */
    public function getConditionReport()
    {
        return $this->ConditionReport;
    }
    /**
     * Set ConditionReport value
     * @param \ammonkc\otaehi\StructType\ConditionReport $conditionReport
     * @return \ammonkc\otaehi\StructType\VehicleRentalDetailsType
     */
    public function setConditionReport(\ammonkc\otaehi\StructType\ConditionReport $conditionReport = null)
    {
        $this->ConditionReport = $conditionReport;
        return $this;
    }
    /**
     * Get ParkingLocation value
     * @return UNKNOWN|null
     */
    public function getParkingLocation()
    {
        return $this->ParkingLocation;
    }
    /**
     * Set ParkingLocation value
     * @param UNKNOWN $parkingLocation
     * @return \ammonkc\otaehi\StructType\VehicleRentalDetailsType
     */
    public function setParkingLocation(UNKNOWN $parkingLocation = null)
    {
        $this->ParkingLocation = $parkingLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleRentalDetailsType
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
