<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehAvail StructType
 * @subpackage Structs
 */
class VehAvail extends AbstractStructBase
{
    /**
     * The VehAvailCore
     * @var mixed
     */
    public $VehAvailCore;
    /**
     * The VehAvailInfo
     * @var mixed
     */
    public $VehAvailInfo;
    /**
     * The AdvanceBooking
     * @var \Ammonkc\Otaehi\StructType\AdvanceBooking
     */
    public $AdvanceBooking;
    /**
     * Constructor method for VehAvail
     * @uses VehAvail::setVehAvailCore()
     * @uses VehAvail::setVehAvailInfo()
     * @uses VehAvail::setAdvanceBooking()
     * @param mixed $vehAvailCore
     * @param mixed $vehAvailInfo
     * @param \Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking
     */
    public function __construct($vehAvailCore = null, $vehAvailInfo = null, \Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking = null)
    {
        $this
            ->setVehAvailCore($vehAvailCore)
            ->setVehAvailInfo($vehAvailInfo)
            ->setAdvanceBooking($advanceBooking);
    }
    /**
     * Get VehAvailCore value
     * @return mixed|null
     */
    public function getVehAvailCore()
    {
        return $this->VehAvailCore;
    }
    /**
     * Set VehAvailCore value
     * @param mixed $vehAvailCore
     * @return \Ammonkc\Otaehi\StructType\VehAvail
     */
    public function setVehAvailCore($vehAvailCore = null)
    {
        $this->VehAvailCore = $vehAvailCore;
        return $this;
    }
    /**
     * Get VehAvailInfo value
     * @return mixed|null
     */
    public function getVehAvailInfo()
    {
        return $this->VehAvailInfo;
    }
    /**
     * Set VehAvailInfo value
     * @param mixed $vehAvailInfo
     * @return \Ammonkc\Otaehi\StructType\VehAvail
     */
    public function setVehAvailInfo($vehAvailInfo = null)
    {
        $this->VehAvailInfo = $vehAvailInfo;
        return $this;
    }
    /**
     * Get AdvanceBooking value
     * @return \Ammonkc\Otaehi\StructType\AdvanceBooking|null
     */
    public function getAdvanceBooking()
    {
        return $this->AdvanceBooking;
    }
    /**
     * Set AdvanceBooking value
     * @param \Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking
     * @return \Ammonkc\Otaehi\StructType\VehAvail
     */
    public function setAdvanceBooking(\Ammonkc\Otaehi\StructType\AdvanceBooking $advanceBooking = null)
    {
        $this->AdvanceBooking = $advanceBooking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehAvail
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
