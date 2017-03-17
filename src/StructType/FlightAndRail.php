<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightAndRail StructType
 * @subpackage Structs
 */
class FlightAndRail extends AbstractStructBase
{
    /**
     * The Number
     * @var \Ammonkc\Otaehi\StructType\Number
     */
    public $Number;
    /**
     * The Carrier
     * @var mixed
     */
    public $Carrier;
    /**
     * The Class
     * @var \Ammonkc\Otaehi\StructType\_Class
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
     * @param \Ammonkc\Otaehi\StructType\Number $number
     * @param mixed $carrier
     * @param \Ammonkc\Otaehi\StructType\_Class $class
     * @param mixed $fareCode
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Number $number = null, $carrier = null, \Ammonkc\Otaehi\StructType\_Class $class = null, $fareCode = null)
    {
        $this
            ->setNumber($number)
            ->setCarrier($carrier)
            ->setClass($class)
            ->setFareCode($fareCode);
    }
    /**
     * Get Number value
     * @return \Ammonkc\Otaehi\StructType\Number|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param \Ammonkc\Otaehi\StructType\Number $number
     * @return \Ammonkc\Otaehi\StructType\FlightAndRail
     */
    public function setNumber(\Ammonkc\Otaehi\StructType\Number $number = null)
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
     * @return \Ammonkc\Otaehi\StructType\FlightAndRail
     */
    public function setCarrier($carrier = null)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    /**
     * Get Class value
     * @return \Ammonkc\Otaehi\StructType\_Class|null
     */
    public function getClass()
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @param \Ammonkc\Otaehi\StructType\_Class $class
     * @return \Ammonkc\Otaehi\StructType\FlightAndRail
     */
    public function setClass(\Ammonkc\Otaehi\StructType\_Class $class = null)
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
     * @return \Ammonkc\Otaehi\StructType\FlightAndRail
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
     * @return \Ammonkc\Otaehi\StructType\FlightAndRail
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
