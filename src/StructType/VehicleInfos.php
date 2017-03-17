<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleInfos StructType
 * @subpackage Structs
 */
class VehicleInfos extends AbstractStructBase
{
    /**
     * The VehicleInfo
     * @var \ammonkc\otaehi\StructType\VehicleInfo
     */
    public $VehicleInfo;
    /**
     * Constructor method for VehicleInfos
     * @uses VehicleInfos::setVehicleInfo()
     * @param \ammonkc\otaehi\StructType\VehicleInfo $vehicleInfo
     */
    public function __construct(\ammonkc\otaehi\StructType\VehicleInfo $vehicleInfo = null)
    {
        $this
            ->setVehicleInfo($vehicleInfo);
    }
    /**
     * Get VehicleInfo value
     * @return \ammonkc\otaehi\StructType\VehicleInfo|null
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }
    /**
     * Set VehicleInfo value
     * @param \ammonkc\otaehi\StructType\VehicleInfo $vehicleInfo
     * @return \ammonkc\otaehi\StructType\VehicleInfos
     */
    public function setVehicleInfo(\ammonkc\otaehi\StructType\VehicleInfo $vehicleInfo = null)
    {
        $this->VehicleInfo = $vehicleInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleInfos
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
