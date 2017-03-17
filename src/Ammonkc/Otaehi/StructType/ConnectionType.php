<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectionType StructType
 * @subpackage Structs
 */
class ConnectionType extends AbstractStructBase
{
    /**
     * The ConnectionLocation
     * @var \Ammonkc\Otaehi\StructType\ConnectionLocation
     */
    public $ConnectionLocation;
    /**
     * Constructor method for ConnectionType
     * @uses ConnectionType::setConnectionLocation()
     * @param \Ammonkc\Otaehi\StructType\ConnectionLocation $connectionLocation
     */
    public function __construct(\Ammonkc\Otaehi\StructType\ConnectionLocation $connectionLocation = null)
    {
        $this
            ->setConnectionLocation($connectionLocation);
    }
    /**
     * Get ConnectionLocation value
     * @return \Ammonkc\Otaehi\StructType\ConnectionLocation|null
     */
    public function getConnectionLocation()
    {
        return $this->ConnectionLocation;
    }
    /**
     * Set ConnectionLocation value
     * @param \Ammonkc\Otaehi\StructType\ConnectionLocation $connectionLocation
     * @return \Ammonkc\Otaehi\StructType\ConnectionType
     */
    public function setConnectionLocation(\Ammonkc\Otaehi\StructType\ConnectionLocation $connectionLocation = null)
    {
        $this->ConnectionLocation = $connectionLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ConnectionType
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
