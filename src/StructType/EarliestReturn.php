<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EarliestReturn StructType
 * @subpackage Structs
 */
class EarliestReturn extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * @var
     */
    public $DayOfWeek;
    /**
     * The Time
     * @var
     */
    public $Time;
    /**
     * Constructor method for EarliestReturn
     * @uses EarliestReturn::setDayOfWeek()
     * @uses EarliestReturn::setTime()
     * @param  $dayOfWeek
     * @param  $time
     */
    public function __construct( $dayOfWeek = null,  $time = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setTime($time);
    }
    /**
     * Get DayOfWeek value
     * @return |null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param  $dayOfWeek
     * @return \Ammonkc\Otaehi\StructType\EarliestReturn
     */
    public function setDayOfWeek( $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Time value
     * @return |null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param  $time
     * @return \Ammonkc\Otaehi\StructType\EarliestReturn
     */
    public function setTime( $time = null)
    {
        $this->Time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\EarliestReturn
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
