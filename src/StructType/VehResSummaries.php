<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehResSummaries StructType
 * @subpackage Structs
 */
class VehResSummaries extends AbstractStructBase
{
    /**
     * The VehResSummary
     * @var \ammonkc\otaehi\StructType\VehicleReservationSummaryType
     */
    public $VehResSummary;
    /**
     * Constructor method for VehResSummaries
     * @uses VehResSummaries::setVehResSummary()
     * @param \ammonkc\otaehi\StructType\VehicleReservationSummaryType $vehResSummary
     */
    public function __construct(\ammonkc\otaehi\StructType\VehicleReservationSummaryType $vehResSummary = null)
    {
        $this
            ->setVehResSummary($vehResSummary);
    }
    /**
     * Get VehResSummary value
     * @return \ammonkc\otaehi\StructType\VehicleReservationSummaryType|null
     */
    public function getVehResSummary()
    {
        return $this->VehResSummary;
    }
    /**
     * Set VehResSummary value
     * @param \ammonkc\otaehi\StructType\VehicleReservationSummaryType $vehResSummary
     * @return \ammonkc\otaehi\StructType\VehResSummaries
     */
    public function setVehResSummary(\ammonkc\otaehi\StructType\VehicleReservationSummaryType $vehResSummary = null)
    {
        $this->VehResSummary = $vehResSummary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehResSummaries
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
