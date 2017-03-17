<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehMatchedLocs StructType
 * @subpackage Structs
 */
class VehMatchedLocs extends AbstractStructBase
{
    /**
     * The VehMatchedLoc
     * @var \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType
     */
    public $VehMatchedLoc;
    /**
     * Constructor method for VehMatchedLocs
     * @uses VehMatchedLocs::setVehMatchedLoc()
     * @param \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType $vehMatchedLoc
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehicleMatchedLocationType $vehMatchedLoc = null)
    {
        $this
            ->setVehMatchedLoc($vehMatchedLoc);
    }
    /**
     * Get VehMatchedLoc value
     * @return \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType|null
     */
    public function getVehMatchedLoc()
    {
        return $this->VehMatchedLoc;
    }
    /**
     * Set VehMatchedLoc value
     * @param \Ammonkc\Otaehi\StructType\VehicleMatchedLocationType $vehMatchedLoc
     * @return \Ammonkc\Otaehi\StructType\VehMatchedLocs
     */
    public function setVehMatchedLoc(\Ammonkc\Otaehi\StructType\VehicleMatchedLocationType $vehMatchedLoc = null)
    {
        $this->VehMatchedLoc = $vehMatchedLoc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehMatchedLocs
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
