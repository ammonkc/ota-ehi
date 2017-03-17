<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRSCoreType StructType
 * @subpackage Structs
 */
class VehicleRetrieveResRSCoreType extends AbstractStructBase
{
    /**
     * The VehReservation
     * @var \ammonkc\otaehi\StructType\VehicleReservationType
     */
    public $VehReservation;
    /**
     * The VehResSummaries
     * @var \ammonkc\otaehi\StructType\VehResSummaries
     */
    public $VehResSummaries;
    /**
     * Constructor method for VehicleRetrieveResRSCoreType
     * @uses VehicleRetrieveResRSCoreType::setVehReservation()
     * @uses VehicleRetrieveResRSCoreType::setVehResSummaries()
     * @param \ammonkc\otaehi\StructType\VehicleReservationType $vehReservation
     * @param \ammonkc\otaehi\StructType\VehResSummaries $vehResSummaries
     */
    public function __construct(\ammonkc\otaehi\StructType\VehicleReservationType $vehReservation = null, \ammonkc\otaehi\StructType\VehResSummaries $vehResSummaries = null)
    {
        $this
            ->setVehReservation($vehReservation)
            ->setVehResSummaries($vehResSummaries);
    }
    /**
     * Get VehReservation value
     * @return \ammonkc\otaehi\StructType\VehicleReservationType|null
     */
    public function getVehReservation()
    {
        return $this->VehReservation;
    }
    /**
     * Set VehReservation value
     * @param \ammonkc\otaehi\StructType\VehicleReservationType $vehReservation
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRSCoreType
     */
    public function setVehReservation(\ammonkc\otaehi\StructType\VehicleReservationType $vehReservation = null)
    {
        $this->VehReservation = $vehReservation;
        return $this;
    }
    /**
     * Get VehResSummaries value
     * @return \ammonkc\otaehi\StructType\VehResSummaries|null
     */
    public function getVehResSummaries()
    {
        return $this->VehResSummaries;
    }
    /**
     * Set VehResSummaries value
     * @param \ammonkc\otaehi\StructType\VehResSummaries $vehResSummaries
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRSCoreType
     */
    public function setVehResSummaries(\ammonkc\otaehi\StructType\VehResSummaries $vehResSummaries = null)
    {
        $this->VehResSummaries = $vehResSummaries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleRetrieveResRSCoreType
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
