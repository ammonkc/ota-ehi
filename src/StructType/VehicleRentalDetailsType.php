<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalDetailsType StructType
 * @subpackage Structs
 */
class VehicleRentalDetailsType extends AbstractStructBase
{
    /**
     * The FuelLevelDetails
     * @var \Ammonkc\Otaehi\StructType\FuelLevelDetails
     */
    public $FuelLevelDetails;
    /**
     * The OdometerReading
     * @var \Ammonkc\Otaehi\StructType\OdometerReading
     */
    public $OdometerReading;
    /**
     * The ConditionReport
     * @var \Ammonkc\Otaehi\StructType\ConditionReport
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
     * @param \Ammonkc\Otaehi\StructType\FuelLevelDetails $fuelLevelDetails
     * @param \Ammonkc\Otaehi\StructType\OdometerReading $odometerReading
     * @param \Ammonkc\Otaehi\StructType\ConditionReport $conditionReport
     * @param UNKNOWN $parkingLocation
     */
    public function __construct(\Ammonkc\Otaehi\StructType\FuelLevelDetails $fuelLevelDetails = null, \Ammonkc\Otaehi\StructType\OdometerReading $odometerReading = null, \Ammonkc\Otaehi\StructType\ConditionReport $conditionReport = null, UNKNOWN $parkingLocation = null)
    {
        $this
            ->setFuelLevelDetails($fuelLevelDetails)
            ->setOdometerReading($odometerReading)
            ->setConditionReport($conditionReport)
            ->setParkingLocation($parkingLocation);
    }
    /**
     * Get FuelLevelDetails value
     * @return \Ammonkc\Otaehi\StructType\FuelLevelDetails|null
     */
    public function getFuelLevelDetails()
    {
        return $this->FuelLevelDetails;
    }
    /**
     * Set FuelLevelDetails value
     * @param \Ammonkc\Otaehi\StructType\FuelLevelDetails $fuelLevelDetails
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType
     */
    public function setFuelLevelDetails(\Ammonkc\Otaehi\StructType\FuelLevelDetails $fuelLevelDetails = null)
    {
        $this->FuelLevelDetails = $fuelLevelDetails;
        return $this;
    }
    /**
     * Get OdometerReading value
     * @return \Ammonkc\Otaehi\StructType\OdometerReading|null
     */
    public function getOdometerReading()
    {
        return $this->OdometerReading;
    }
    /**
     * Set OdometerReading value
     * @param \Ammonkc\Otaehi\StructType\OdometerReading $odometerReading
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType
     */
    public function setOdometerReading(\Ammonkc\Otaehi\StructType\OdometerReading $odometerReading = null)
    {
        $this->OdometerReading = $odometerReading;
        return $this;
    }
    /**
     * Get ConditionReport value
     * @return \Ammonkc\Otaehi\StructType\ConditionReport|null
     */
    public function getConditionReport()
    {
        return $this->ConditionReport;
    }
    /**
     * Set ConditionReport value
     * @param \Ammonkc\Otaehi\StructType\ConditionReport $conditionReport
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType
     */
    public function setConditionReport(\Ammonkc\Otaehi\StructType\ConditionReport $conditionReport = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType
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
