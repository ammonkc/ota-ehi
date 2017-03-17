<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleWhereAtFacilityType StructType
 * @subpackage Structs
 */
class VehicleWhereAtFacilityType extends AbstractStructBase
{
    /**
     * The Location
     * @var UNKNOWN
     */
    public $Location;
    /**
     * Constructor method for VehicleWhereAtFacilityType
     * @uses VehicleWhereAtFacilityType::setLocation()
     * @param UNKNOWN $location
     */
    public function __construct(UNKNOWN $location = null)
    {
        $this
            ->setLocation($location);
    }
    /**
     * Get Location value
     * @return UNKNOWN|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param UNKNOWN $location
     * @return \Ammonkc\Otaehi\StructType\VehicleWhereAtFacilityType
     */
    public function setLocation(UNKNOWN $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleWhereAtFacilityType
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
