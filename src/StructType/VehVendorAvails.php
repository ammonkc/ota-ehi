<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehVendorAvails StructType
 * @subpackage Structs
 */
class VehVendorAvails extends AbstractStructBase
{
    /**
     * The VehVendorAvail
     * @var mixed
     */
    public $VehVendorAvail;
    /**
     * Constructor method for VehVendorAvails
     * @uses VehVendorAvails::setVehVendorAvail()
     * @param mixed $vehVendorAvail
     */
    public function __construct($vehVendorAvail = null)
    {
        $this
            ->setVehVendorAvail($vehVendorAvail);
    }
    /**
     * Get VehVendorAvail value
     * @return mixed|null
     */
    public function getVehVendorAvail()
    {
        return $this->VehVendorAvail;
    }
    /**
     * Set VehVendorAvail value
     * @param mixed $vehVendorAvail
     * @return \Ammonkc\Otaehi\StructType\VehVendorAvails
     */
    public function setVehVendorAvail($vehVendorAvail = null)
    {
        $this->VehVendorAvail = $vehVendorAvail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehVendorAvails
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
