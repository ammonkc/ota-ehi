<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportationType StructType
 * @subpackage Structs
 */
class TransportationType extends AbstractStructBase
{
    /**
     * The Transportation
     * @var \ammonkc\otaehi\StructType\Transportation
     */
    public $Transportation;
    /**
     * Constructor method for TransportationType
     * @uses TransportationType::setTransportation()
     * @param \ammonkc\otaehi\StructType\Transportation $transportation
     */
    public function __construct(\ammonkc\otaehi\StructType\Transportation $transportation = null)
    {
        $this
            ->setTransportation($transportation);
    }
    /**
     * Get Transportation value
     * @return \ammonkc\otaehi\StructType\Transportation|null
     */
    public function getTransportation()
    {
        return $this->Transportation;
    }
    /**
     * Set Transportation value
     * @param \ammonkc\otaehi\StructType\Transportation $transportation
     * @return \ammonkc\otaehi\StructType\TransportationType
     */
    public function setTransportation(\ammonkc\otaehi\StructType\Transportation $transportation = null)
    {
        $this->Transportation = $transportation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\TransportationType
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
