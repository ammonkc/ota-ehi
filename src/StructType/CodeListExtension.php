<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeListExtension StructType
 * @subpackage Structs
 */
class CodeListExtension extends AbstractStructBase
{
    /**
     * The Summary
     * @var mixed
     */
    public $Summary;
    /**
     * The Detail
     * @var mixed
     */
    public $Detail;
    /**
     * The ChargeInd
     * @var bool
     */
    public $ChargeInd;
    /**
     * The ProximityInd
     * @var bool
     */
    public $ProximityInd;
    /**
     * The QuantityInd
     * @var bool
     */
    public $QuantityInd;
    /**
     * The ScheduleInd
     * @var bool
     */
    public $ScheduleInd;
    /**
     * Constructor method for CodeListExtension
     * @uses CodeListExtension::setSummary()
     * @uses CodeListExtension::setDetail()
     * @uses CodeListExtension::setChargeInd()
     * @uses CodeListExtension::setProximityInd()
     * @uses CodeListExtension::setQuantityInd()
     * @uses CodeListExtension::setScheduleInd()
     * @param mixed $summary
     * @param mixed $detail
     * @param bool $chargeInd
     * @param bool $proximityInd
     * @param bool $quantityInd
     * @param bool $scheduleInd
     */
    public function __construct($summary = null, $detail = null, $chargeInd = null, $proximityInd = null, $quantityInd = null, $scheduleInd = null)
    {
        $this
            ->setSummary($summary)
            ->setDetail($detail)
            ->setChargeInd($chargeInd)
            ->setProximityInd($proximityInd)
            ->setQuantityInd($quantityInd)
            ->setScheduleInd($scheduleInd);
    }
    /**
     * Get Summary value
     * @return mixed|null
     */
    public function getSummary()
    {
        return $this->Summary;
    }
    /**
     * Set Summary value
     * @param mixed $summary
     * @return \Ammonkc\Otaehi\StructType\CodeListExtension
     */
    public function setSummary($summary = null)
    {
        $this->Summary = $summary;
        return $this;
    }
    /**
     * Get Detail value
     * @return mixed|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @param mixed $detail
     * @return \Ammonkc\Otaehi\StructType\CodeListExtension
     */
    public function setDetail($detail = null)
    {
        $this->Detail = $detail;
        return $this;
    }
    /**
     * Get ChargeInd value
     * @return bool|null
     */
    public function getChargeInd()
    {
        return $this->ChargeInd;
    }
    /**
     * Set ChargeInd value
     * @param bool $chargeInd
     * @return \Ammonkc\Otaehi\StructType\CodeListExtension
     */
    public function setChargeInd($chargeInd = null)
    {
        $this->ChargeInd = $chargeInd;
        return $this;
    }
    /**
     * Get ProximityInd value
     * @return bool|null
     */
    public function getProximityInd()
    {
        return $this->ProximityInd;
    }
    /**
     * Set ProximityInd value
     * @param bool $proximityInd
     * @return \Ammonkc\Otaehi\StructType\CodeListExtension
     */
    public function setProximityInd($proximityInd = null)
    {
        $this->ProximityInd = $proximityInd;
        return $this;
    }
    /**
     * Get QuantityInd value
     * @return bool|null
     */
    public function getQuantityInd()
    {
        return $this->QuantityInd;
    }
    /**
     * Set QuantityInd value
     * @param bool $quantityInd
     * @return \Ammonkc\Otaehi\StructType\CodeListExtension
     */
    public function setQuantityInd($quantityInd = null)
    {
        $this->QuantityInd = $quantityInd;
        return $this;
    }
    /**
     * Get ScheduleInd value
     * @return bool|null
     */
    public function getScheduleInd()
    {
        return $this->ScheduleInd;
    }
    /**
     * Set ScheduleInd value
     * @param bool $scheduleInd
     * @return \Ammonkc\Otaehi\StructType\CodeListExtension
     */
    public function setScheduleInd($scheduleInd = null)
    {
        $this->ScheduleInd = $scheduleInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CodeListExtension
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
