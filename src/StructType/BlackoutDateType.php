<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackoutDateType StructType
 * @subpackage Structs
 */
class BlackoutDateType extends AbstractStructBase
{
    /**
     * The BlackoutDate
     * @var mixed
     */
    public $BlackoutDate;
    /**
     * Constructor method for BlackoutDateType
     * @uses BlackoutDateType::setBlackoutDate()
     * @param mixed $blackoutDate
     */
    public function __construct($blackoutDate = null)
    {
        $this
            ->setBlackoutDate($blackoutDate);
    }
    /**
     * Get BlackoutDate value
     * @return mixed|null
     */
    public function getBlackoutDate()
    {
        return $this->BlackoutDate;
    }
    /**
     * Set BlackoutDate value
     * @param mixed $blackoutDate
     * @return \Ammonkc\Otaehi\StructType\BlackoutDateType
     */
    public function setBlackoutDate($blackoutDate = null)
    {
        $this->BlackoutDate = $blackoutDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\BlackoutDateType
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
