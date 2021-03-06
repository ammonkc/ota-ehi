<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportationsType StructType
 * @subpackage Structs
 */
class TransportationsType extends AbstractStructBase
{
    /**
     * The Transportations
     * @var mixed
     */
    public $Transportations;
    /**
     * Constructor method for TransportationsType
     * @uses TransportationsType::setTransportations()
     * @param mixed $transportations
     */
    public function __construct($transportations = null)
    {
        $this
            ->setTransportations($transportations);
    }
    /**
     * Get Transportations value
     * @return mixed|null
     */
    public function getTransportations()
    {
        return $this->Transportations;
    }
    /**
     * Set Transportations value
     * @param mixed $transportations
     * @return \Ammonkc\Otaehi\StructType\TransportationsType
     */
    public function setTransportations($transportations = null)
    {
        $this->Transportations = $transportations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\TransportationsType
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
