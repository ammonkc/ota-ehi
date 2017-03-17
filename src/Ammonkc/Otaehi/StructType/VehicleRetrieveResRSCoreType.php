<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRetrieveResRSCoreType StructType
 * @subpackage Structs
 */
class VehicleRetrieveResRSCoreType extends AbstractStructBase
{
    /**
     * The VehReservation
     * @var \Ammonkc\Otaehi\StructType\VehicleReservationType
     */
    public $VehReservation;
    /**
     * The VehResSummaries
     * @var \Ammonkc\Otaehi\StructType\VehResSummaries
     */
    public $VehResSummaries;
    /**
     * Constructor method for VehicleRetrieveResRSCoreType
     * @uses VehicleRetrieveResRSCoreType::setVehReservation()
     * @uses VehicleRetrieveResRSCoreType::setVehResSummaries()
     * @param \Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation
     * @param \Ammonkc\Otaehi\StructType\VehResSummaries $vehResSummaries
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation = null, \Ammonkc\Otaehi\StructType\VehResSummaries $vehResSummaries = null)
    {
        $this
            ->setVehReservation($vehReservation)
            ->setVehResSummaries($vehResSummaries);
    }
    /**
     * Get VehReservation value
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationType|null
     */
    public function getVehReservation()
    {
        return $this->VehReservation;
    }
    /**
     * Set VehReservation value
     * @param \Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType
     */
    public function setVehReservation(\Ammonkc\Otaehi\StructType\VehicleReservationType $vehReservation = null)
    {
        $this->VehReservation = $vehReservation;
        return $this;
    }
    /**
     * Get VehResSummaries value
     * @return \Ammonkc\Otaehi\StructType\VehResSummaries|null
     */
    public function getVehResSummaries()
    {
        return $this->VehResSummaries;
    }
    /**
     * Set VehResSummaries value
     * @param \Ammonkc\Otaehi\StructType\VehResSummaries $vehResSummaries
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType
     */
    public function setVehResSummaries(\Ammonkc\Otaehi\StructType\VehResSummaries $vehResSummaries = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType
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
