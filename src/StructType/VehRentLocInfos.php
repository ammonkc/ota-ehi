<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehRentLocInfos StructType
 * @subpackage Structs
 */
class VehRentLocInfos extends AbstractStructBase
{
    /**
     * The VehRentLocInfo
     * @var mixed
     */
    public $VehRentLocInfo;
    /**
     * Constructor method for VehRentLocInfos
     * @uses VehRentLocInfos::setVehRentLocInfo()
     * @param mixed $vehRentLocInfo
     */
    public function __construct($vehRentLocInfo = null)
    {
        $this
            ->setVehRentLocInfo($vehRentLocInfo);
    }
    /**
     * Get VehRentLocInfo value
     * @return mixed|null
     */
    public function getVehRentLocInfo()
    {
        return $this->VehRentLocInfo;
    }
    /**
     * Set VehRentLocInfo value
     * @param mixed $vehRentLocInfo
     * @return \ammonkc\otaehi\StructType\VehRentLocInfos
     */
    public function setVehRentLocInfo($vehRentLocInfo = null)
    {
        $this->VehRentLocInfo = $vehRentLocInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehRentLocInfos
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
