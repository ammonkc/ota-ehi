<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportationType StructType
 * @subpackage Structs
 */
class TransportationType extends AbstractStructBase
{
    /**
     * The Transportation
     * @var \Ammonkc\Otaehi\StructType\Transportation
     */
    public $Transportation;
    /**
     * Constructor method for TransportationType
     * @uses TransportationType::setTransportation()
     * @param \Ammonkc\Otaehi\StructType\Transportation $transportation
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Transportation $transportation = null)
    {
        $this
            ->setTransportation($transportation);
    }
    /**
     * Get Transportation value
     * @return \Ammonkc\Otaehi\StructType\Transportation|null
     */
    public function getTransportation()
    {
        return $this->Transportation;
    }
    /**
     * Set Transportation value
     * @param \Ammonkc\Otaehi\StructType\Transportation $transportation
     * @return \Ammonkc\Otaehi\StructType\TransportationType
     */
    public function setTransportation(\Ammonkc\Otaehi\StructType\Transportation $transportation = null)
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
     * @return \Ammonkc\Otaehi\StructType\TransportationType
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
