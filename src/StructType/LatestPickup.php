<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatestPickup StructType
 * @subpackage Structs
 */
class LatestPickup extends AbstractStructBase
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
     * Constructor method for LatestPickup
     * @uses LatestPickup::setDayOfWeek()
     * @uses LatestPickup::setTime()
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
     * @return \Ammonkc\Otaehi\StructType\LatestPickup
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
     * @return \Ammonkc\Otaehi\StructType\LatestPickup
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
     * @return \Ammonkc\Otaehi\StructType\LatestPickup
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
