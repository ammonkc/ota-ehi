<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehPrefs StructType
 * @subpackage Structs
 */
class VehPrefs extends AbstractStructBase
{
    /**
     * The VehPref
     * @var \ammonkc\otaehi\StructType\VehPref
     */
    public $VehPref;
    /**
     * Constructor method for VehPrefs
     * @uses VehPrefs::setVehPref()
     * @param \ammonkc\otaehi\StructType\VehPref $vehPref
     */
    public function __construct(\ammonkc\otaehi\StructType\VehPref $vehPref = null)
    {
        $this
            ->setVehPref($vehPref);
    }
    /**
     * Get VehPref value
     * @return \ammonkc\otaehi\StructType\VehPref|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \ammonkc\otaehi\StructType\VehPref $vehPref
     * @return \ammonkc\otaehi\StructType\VehPrefs
     */
    public function setVehPref(\ammonkc\otaehi\StructType\VehPref $vehPref = null)
    {
        $this->VehPref = $vehPref;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehPrefs
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
