<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightAndRail StructType
 * @subpackage Structs
 */
class FlightAndRail extends AbstractStructBase
{
    /**
     * The Number
     * @var \ammonkc\otaehi\StructType\Number
     */
    public $Number;
    /**
     * The Carrier
     * @var mixed
     */
    public $Carrier;
    /**
     * The Class
     * @var \ammonkc\otaehi\StructType\_Class
     */
    public $Class;
    /**
     * The FareCode
     * @var mixed
     */
    public $FareCode;
    /**
     * Constructor method for FlightAndRail
     * @uses FlightAndRail::setNumber()
     * @uses FlightAndRail::setCarrier()
     * @uses FlightAndRail::setClass()
     * @uses FlightAndRail::setFareCode()
     * @param \ammonkc\otaehi\StructType\Number $number
     * @param mixed $carrier
     * @param \ammonkc\otaehi\StructType\_Class $class
     * @param mixed $fareCode
     */
    public function __construct(\ammonkc\otaehi\StructType\Number $number = null, $carrier = null, \ammonkc\otaehi\StructType\_Class $class = null, $fareCode = null)
    {
        $this
            ->setNumber($number)
            ->setCarrier($carrier)
            ->setClass($class)
            ->setFareCode($fareCode);
    }
    /**
     * Get Number value
     * @return \ammonkc\otaehi\StructType\Number|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param \ammonkc\otaehi\StructType\Number $number
     * @return \ammonkc\otaehi\StructType\FlightAndRail
     */
    public function setNumber(\ammonkc\otaehi\StructType\Number $number = null)
    {
        $this->Number = $number;
        return $this;
    }
    /**
     * Get Carrier value
     * @return mixed|null
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param mixed $carrier
     * @return \ammonkc\otaehi\StructType\FlightAndRail
     */
    public function setCarrier($carrier = null)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    /**
     * Get Class value
     * @return \ammonkc\otaehi\StructType\_Class|null
     */
    public function getClass()
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @param \ammonkc\otaehi\StructType\_Class $class
     * @return \ammonkc\otaehi\StructType\FlightAndRail
     */
    public function setClass(\ammonkc\otaehi\StructType\_Class $class = null)
    {
        $this->Class = $class;
        return $this;
    }
    /**
     * Get FareCode value
     * @return mixed|null
     */
    public function getFareCode()
    {
        return $this->FareCode;
    }
    /**
     * Set FareCode value
     * @param mixed $fareCode
     * @return \ammonkc\otaehi\StructType\FlightAndRail
     */
    public function setFareCode($fareCode = null)
    {
        $this->FareCode = $fareCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\FlightAndRail
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
