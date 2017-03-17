<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehPrefs StructType
 * @subpackage Structs
 */
class VehPrefs extends AbstractStructBase
{
    /**
     * The VehPref
     * @var \Ammonkc\Otaehi\StructType\VehPref
     */
    public $VehPref;
    /**
     * Constructor method for VehPrefs
     * @uses VehPrefs::setVehPref()
     * @param \Ammonkc\Otaehi\StructType\VehPref $vehPref
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehPref $vehPref = null)
    {
        $this
            ->setVehPref($vehPref);
    }
    /**
     * Get VehPref value
     * @return \Ammonkc\Otaehi\StructType\VehPref|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \Ammonkc\Otaehi\StructType\VehPref $vehPref
     * @return \Ammonkc\Otaehi\StructType\VehPrefs
     */
    public function setVehPref(\Ammonkc\Otaehi\StructType\VehPref $vehPref = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehPrefs
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
