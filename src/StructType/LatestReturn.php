<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatestReturn StructType
 * @subpackage Structs
 */
class LatestReturn extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * @var UNKNOWN
     */
    public $DayOfWeek;
    /**
     * The Time
     * @var UNKNOWN
     */
    public $Time;
    /**
     * Constructor method for LatestReturn
     * @uses LatestReturn::setDayOfWeek()
     * @uses LatestReturn::setTime()
     * @param UNKNOWN $dayOfWeek
     * @param UNKNOWN $time
     */
    public function __construct(UNKNOWN $dayOfWeek = null, UNKNOWN $time = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setTime($time);
    }
    /**
     * Get DayOfWeek value
     * @return UNKNOWN|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param UNKNOWN $dayOfWeek
     * @return \Ammonkc\Otaehi\StructType\LatestReturn
     */
    public function setDayOfWeek(UNKNOWN $dayOfWeek = null)
    {
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Time value
     * @return UNKNOWN|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param UNKNOWN $time
     * @return \Ammonkc\Otaehi\StructType\LatestReturn
     */
    public function setTime(UNKNOWN $time = null)
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
     * @return \Ammonkc\Otaehi\StructType\LatestReturn
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
