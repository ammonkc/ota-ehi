<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleInfos StructType
 * @subpackage Structs
 */
class VehicleInfos extends AbstractStructBase
{
    /**
     * The VehicleInfo
     * @var \Ammonkc\Otaehi\StructType\VehicleInfo
     */
    public $VehicleInfo;
    /**
     * Constructor method for VehicleInfos
     * @uses VehicleInfos::setVehicleInfo()
     * @param \Ammonkc\Otaehi\StructType\VehicleInfo $vehicleInfo
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehicleInfo $vehicleInfo = null)
    {
        $this
            ->setVehicleInfo($vehicleInfo);
    }
    /**
     * Get VehicleInfo value
     * @return \Ammonkc\Otaehi\StructType\VehicleInfo|null
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }
    /**
     * Set VehicleInfo value
     * @param \Ammonkc\Otaehi\StructType\VehicleInfo $vehicleInfo
     * @return \Ammonkc\Otaehi\StructType\VehicleInfos
     */
    public function setVehicleInfo(\Ammonkc\Otaehi\StructType\VehicleInfo $vehicleInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleInfos
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
